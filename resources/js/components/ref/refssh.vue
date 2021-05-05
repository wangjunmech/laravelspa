<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h2>小米路由器SSH教程</h2></div>
                    <div class="card-body">
                        <p class="theme">1.下载刷开发板的机包，把路由刷成开发版</p>
                        <p>
                            <ul class="exp">                        
                                  <li><span><strong><a href="http://www1.miwifi.com/miwifi_download.html">下载链接</a>&nbsp;进入页面后左边是客户端，右边是ROM包，点击右边的ROM,根据自己的机型选择相应的刷机包</strong></span></li>
                            </ul>

                        </p>
                        <p class="note">刷新机前尽量先备份</p>

                        <p class="theme">2.刷机到开发版</p>
                        <p>
                            <ul class="exp">                        
                                  <li><span><strong>192.168.31.1进入后台，找到系统升级，手动升级，选择下载的刷机包进行升级，几分名后路由重启后看看后台版本显示为开发版</strong></span></li>
                            </ul>

                        </p>
                        <p class="note">先检查机型对应的刷机包是否正确，升级前备份，升级时注意要清除所有用户配置</p>

                        <p class="theme">3.开启SSH,获取root密码,以及Root工具包下载，登录小米网站 <a href="https://d.miwifi.com/rom/ssh">https://d.miwifi.com/rom/ssh?userId=小米账号</a></p>
                        <p>
                            <ul class="exp">                        
                                  <li>
                                    <span class="">Xiaomi_3118<strong style="font-size:12px;line-height:normal;">(小米路由器3增强版----R3G)</strong></span>
                                    <span class="ssh_rootpsw">root密码 <em>6efd2d83</em></span>
                                    <a data-url="/rom/ssh/download?sn=15757/30437731" href="javascript:;" class="ssh_dlbtn">下载工具包</a>
                                  </li>                                
                                  <li>
                                    <span class="">www<strong style="font-size:12px;line-height:normal;">(小米路由器3----MIR3)</strong></span>
                                    <span class="ssh_rootpsw">root密码 <em>d31fdf2c</em></span>
                                    <a data-url="/rom/ssh/download?sn=12937/20656281" href="javascript:;" class="ssh_dlbtn">下载工具包</a>
                                  </li>                                
                            </ul>
                            <p>把下载的root工具包放到一个FAT/FAT32格式的U盘且文件名不能更改，插入U盘到路由器后，按住reset的同时插上路由器电源，保持按住reset等待几秒直到黄灯开始闪烁时放开，等路由变蓝灯说明Root完成，SSH已经打开</p>
                        </p>
                        <p class="note">注意U盘格式和放手时机</p>
                        <p class="theme">4.安装SSH工具客户端，用于访问SSH服务</p>
                        <p>
                            <ul class="exp">                        
                                  <li><span><strong>Xshell</strong></span></li>
                                  <li><span><strong>Putty</strong></span></li>
                            </ul>
                        </p>
                        <p class="note">还有其它各种客户端都可以,也可以直接用命令行命令登录：ssh root@192.168.31.1 -p22</p>


                        <p class="theme">5.访问SSH，以putty为例</p>
                        <p>
                            <ul class="exp">                        
                                  <li><span><strong>打开putty，点击左上的session，在右边选项中填入Host Name:192.168.31.1,Port:22,点击下面的open将弹出命令行</strong></span></li>
                                  <li><span><strong>login as:输入SSH用户名root(从小米获得SSH的用户名https://d.miwifi.com/rom/ssh)</strong></span></li>
                                  <li><span><strong>root@192.168.31.1's password:输入对应的root密码后回车,显示ARE U OK说明成功开启SSH</strong></span></li>
                            </ul>

                        </p>
                        <p class="note">操作登录设备必须在路由器的网络服务下</p>

                        <p class="theme">6.安装软件服务，如MT工具箱，MIXBOX等</p>
                        <p>
                            <ul class="exp">                        
                                  <li><span><a href="https://aisoa.cn/post-3181.html">小米路由器一键安装MIXBOX工具箱脚本安装entware组件wakeonlan唤醒局域网机器</a></span></li>
                                  <li><span>安装MT工具箱使用地址“curl -s -k https://beta.misstar.com/download/$(uname -m)/mtinstall -o /tmp/mtinstall && chmod +x /tmp/mtinstall && /tmp/mtinstall”</span></li>
                            </ul>

                        </p>
                        <p class="theme">7. Windows10命令行登录（ssh root@192.168.31.1）</p>
                        <p>
                            <ul class="exp">                        
                                  <li>登录报错，需要重新生成SSH Key
                                  </li>
                                  <code>
                                    <pre>
C:\Users\bruce>ssh root@192.168.31.1
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
@    WARNING: REMOTE HOST IDENTIFICATION HAS CHANGED!     @
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
IT IS POSSIBLE THAT SOMEONE IS DOING SOMETHING NASTY!
Someone could be eavesdropping on you right now (man-in-the-middle attack)!
It is also possible that a host key has just been changed.
The fingerprint for the RSA key sent by the remote host is
SHA256:2TiauoP6CIVEVP+glz+C51p9HV2bek2NAjkmVjAyHAM.
Please contact your system administrator.
Add correct host key in C:\\Users\\bruce/.ssh/known_hosts to get rid of this message.
Offending RSA key in C:\\Users\\bruce/.ssh/known_hosts:4
RSA host key for 192.168.31.1 has changed and you have requested strict checking.
Host key verification failed.</pre>
                                  </code>
                            </ul>

                        </p>
                        <p class="note">安装 mixbox后可通过mixbox命令访问使用工具箱</p>


                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                imgurl:'/logos/404.jpg'
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
<style scoped="scoped">
    .theme{
        font-size: 20px;
        font-weight: 900;
    }
    .exp{
        background-color: #adf;
    }
    .note{
        background-color: Gold;
        color:red;
        text-indent:25px;
    }

</style>