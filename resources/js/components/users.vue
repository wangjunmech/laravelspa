<template>
    <div class="container">
          <div class="col-md-12 mt-2">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Users Table</h3>
                <div class="card-tools">
                      <button class="btn btn-primary" data-toggle="modal" data-target="#userModal" @click="changeForm()" ><i class="fas fa-user-plus orange"></i> Add New User</button>

              </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>UcName</th>
                      <th>Mail</th>
                      <th>Registered At</th>
                      <th>Operation</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="user in users" :key="user.id">
                      <td>{{user.id}}</td>
                      <td>{{user.name}}</td>
                      <td>{{user.name|ucText}}</td>
                      <td>{{user.email | ucFirst}}</td>
                      <td><span class="tag tag-success">{{user.created_at}}</span></td>
                      <td>
                        <a href="#" @click="editUser(user)">                            
                        <i class="fa fa-edit blue"></i>
                        </a>
                        <a href="#" @click="delUser(user.id,user.name)">                            
                        <i class="fa fa-trash pl-3 red" ></i>
                        </a>
                    </td>
                    </tr>

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
         <!-- Add or user Modal -->
            <div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">

                    <h5 class="modal-title" id="exampleModalLabel">
                        <h5 v-if="editMode">Edit User</h5>
                        <h5 v-else>Create User</h5>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <!-- form -->
                    <i v-if=""></i>
                    <!-- @submit.prevent //阻止默认提交刷新页面 -->
                    <form @submit.prevent="editMode ? updateUser() : createUser()" @keydown="form.onKeydown($event)">

                        <div class="form-group">
                          <label>Username</label>
                          <input v-model="form.name" type="text" name="name"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
                          <has-error :form="form" field="name"></has-error>
                        </div>
                        <div class="form-group">
                          <label>Email</label>
                          <input v-model="form.email" type="text" name="email"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('email') }">
                          <has-error :form="form" field="email"></has-error>
                        </div>

                        <div class="form-group">
                          <label>Password</label>
                          <input v-model="form.password" type="password" name="password"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('password') }">
                          <has-error :form="form" field="password"></has-error>
                        </div>

                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">
                                <span v-if="editMode">Update User</span>
                                <span v-else>Create User</span>
                            </button>
                          </div>
                      </form>
                    <!-- end form -->
                  </div>
                </div>
              </div>
            </div>
    </div>
</template>

<script>
    export default {  
        data(){
            return{
                users:{},
                editMode:false,
                form:new Form({
                    id:'',
                    name:'',
                    email:'',
                    password:'',
                })

            }
        }, 
        methods:{
            changeForm(){
                this.editMode=false;
                this.form.clear();//清除错误
                this.form.reset();//清空modal框内容
            },

            loadUsers(){
                this.$Progress.start();
                axios.get('api/user')
                .then(({data}) => (
                    this.users = data.data
                    ))
                .catch(err=>console.log(err))
                this.$Progress.finish();
                // swalt.fire({
                //   icon: 'success',
                //   title: 'Users loaded successfully!'
                // })
                console.log('#加载用户列表111！')

            },
            createUser(){
                console.log('#Submit Create User')
                this.editMode=false;
                this.$Progress.start();
                this.form.post('api/user')
                .then(({ data }) => { console.log(data) })
                .then(()=>{
                    this.$Progress.finish();
                    $("#userModal").modal('hide');
                    swalt.fire({
                      icon: 'success',
                      title: 'Users Added successfully!'
                    })               
                    eventHandler.$emit('userListRefresh')
                })
                .catch(err=>console.log(err))
                .finally();
               
            },
            editUser(user){
                console.log('#Edit User form')
                this.editMode=true;
                this.$Progress.start();
                this.form.clear();//清除错误
                this.form.reset();//重置清空表单
                $("#userModal").modal('show');
                this.form.fill(user);  
                this.$Progress.finish();               
            },
            updateUser(id){
                console.log('#Updating User')
                this.$Progress.start();
                axios.patch('api/user/'+this.form.id)
                .then(()=>{
                    this.$Progress.finish();
                    $("#userModal").modal('hide');
                    swalt.fire({
                      icon: 'success',
                      title: 'Users Updated successfully!'
                    })               
                    eventHandler.$emit('userListRefresh')
                })
                .catch(err=>console.log(err))
                .finally();
            },
            delUser(id,name){   
                this.$Progress.start();
                swalt.fire({
                      title: 'Are you sure to delete '+name+' ?',
                      text: "You won't be able to revert this!",
                      icon: 'warning',
                      showCancelButton: true,
                      confirmButtonColor: '#3085d6',
                      cancelButtonColor: '#d33',
                      confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                      console.log(result)
                      if (result.value) {
                        axios.delete('api/user/'+id).then(
                            (data)=>{ 
                            // console.log(data.data.msg);    
                            if(data.data.msg == 1){
                                console.log('成功删除！')                           
                                swalt.fire(
                                  ' Deleted!',
                                  'User '+name+' has been deleted.',
                                  'success'
                                )
                            eventHandler.$emit('userListRefresh')

                            }
                            })
                        .catch((err)=>{
                            console.log(err)
                        })
                      }
                    })
                this.$Progress.finish();
            }
        } ,
        created() {
            this.loadUsers();
            console.log('Component created!!');
            // 指定每隔几秒定时发送请求
            // setInterval(()=>this.loadUsers(),3000);

            // // 监听事件重新请求USER列表
            eventHandler.$on('userListRefresh',()=>{
                this.loadUsers()
                console.log('重新加载用户表')
                console.log(this.users)
            })
        },


    }
</script>
