<template>
    <div class="container">
            <div data-for="beveled">
                <p>
                    <a href="javascript:void(0)" class="button-bevel orangeColor"> <span class="refresh"></span> Button </a>
                    <a href="javascript:void(0)" class="button-bevel orangeColor"> <span class="shuffle"></span> Button </a>
                    <a href="javascript:void(0)" class="button-bevel orangeColor"> <span class="preview"></span> Button </a> 
                    <a href="javascript:void(0)" class="button-bevel orangeColor"> <span class="tea"></span> Button </a> 
                    <a href="javascript:void(0)" class="button-bevel orangeColor"> <span class="wifi"></span> Button </a> 
                    <a href="javascript:void(0)" class="button-bevel orangeColor"> <span class="locator"></span> Button </a> 
                </p>
                
            </div>
             
            <div data-for="rectangle">
                <p>
                    <a href="javascript:void(0)" class="button orangeColor"> <span class="refresh"></span> Button </a>
                    <a href="javascript:void(0)" class="button orangeColor"> <span class="shuffle"></span> Button </a>
                    <a href="javascript:void(0)" class="button orangeColor"> <span class="preview"></span> Button </a> 
                    <a href="javascript:void(0)" class="button orangeColor"> <span class="tea"></span> Button </a> 
                    <a href="javascript:void(0)" class="button orangeColor"> <span class="wifi"></span> Button </a> 
                    <a href="javascript:void(0)" class="button orangeColor"> <span class="locator"></span> Button </a> 
                </p>
            </div>
            <div data-for="rounded">
                <p>
                    <a href="javascript:void(0)" class="button rounded orangeColor"> <span class="edit"></span> Button </a>
                    <a href="javascript:void(0)" class="button rounded orangeColor"> <span class="upload"></span> Button </a>
                    <a href="javascript:void(0)" class="button rounded orangeColor"> <span class="storage"></span> Button </a> 
                    <a href="javascript:void(0)" class="button rounded orangeColor"> <span class="photo"></span> Button </a> 
                    <a href="javascript:void(0)" class="button rounded orangeColor"> <span class="help"></span> Button </a>  
                    <a href="javascript:void(0)" class="button rounded orangeColor"> <span class="locator"></span> Button </a> 
                </p>
            </div>
            <div data-for="rounded">
                <p>
                    <a href="javascript:void(0)" class="button rounded greenColor"> <span class="edit"></span> Button </a>
                    <a href="javascript:void(0)" class="button rounded greenColor"> <span class="upload"></span> Button </a>
                    <a href="javascript:void(0)" class="button rounded greenColor"> <span class="storage"></span> Button </a> 
                    <a href="javascript:void(0)" class="button rounded greenColor"> <span class="photo"></span> Button </a> 
                    <a href="javascript:void(0)" class="button rounded greenColor"> <span class="help"></span> Button </a>  
                    <a href="javascript:void(0)" class="button rounded greenColor"> <span class="locator"></span> Button </a> 
                </p>
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
<style>
    

/*按钮样式************************/

.button, .button-bevel {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 13px;
  color: #fff;
  text-decoration: none;
  display: inline-block;
  text-align: center;
  padding: 7px 20px 9px;
  margin: .5em .5em .5em 0;
  cursor: pointer;
  text-shadow: 0 1px 1px rgba(0,0,0,0.4);
  -webkit-transition: 0.1s linear;
  -moz-transition: 0.1s linear;
  -ms-transition: 0.1s linear;
  -o-transition: 0.1s linear;
  transition: 0.1s linear;
}
.button {
  border-radius: 2px;
  box-shadow: inset rgba(255,255,255,0.3) 1px 1px 0;
} 
.button:active {
  box-shadow: inset rgba(0,0,0,0.4) 0px 0px 6px;
}
.rounded {
    border-radius: 20px;
}
.orangeColor {
  background: rgb(255,183,0);
  background: -moz-linear-gradient(top,  rgba(255,183,0,1) 0%, rgba(255,140,0,1) 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,183,0,1)), color-stop(100%,rgba(255,140,0,1)));
  background: -webkit-linear-gradient(top,  rgba(255,183,0,1) 0%,rgba(255,140,0,1) 100%);
  background: -o-linear-gradient(top,  rgba(255,183,0,1) 0%,rgba(255,140,0,1) 100%);
  background: -ms-linear-gradient(top,  rgba(255,183,0,1) 0%,rgba(255,140,0,1) 100%);
  background: linear-gradient(to bottom,  rgba(255,183,0,1) 0%,rgba(255,140,0,1) 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffb700', endColorstr='#ff8c00',GradientType=0 );
  border: 1px solid #e59500;
} 
.orangeColor:hover {
  background: rgb(255,203,72);
  background: -moz-linear-gradient(top,  rgba(255,203,72,1) 0%, rgba(255,156,35,1) 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,203,72,1)), color-stop(100%,rgba(255,156,35,1)));
  background: -webkit-linear-gradient(top,  rgba(255,203,72,1) 0%,rgba(255,156,35,1) 100%);
  background: -o-linear-gradient(top,  rgba(255,203,72,1) 0%,rgba(255,156,35,1) 100%);
  background: -ms-linear-gradient(top,  rgba(255,203,72,1) 0%,rgba(255,156,35,1) 100%);
  background: linear-gradient(to bottom,  rgba(255,203,72,1) 0%,rgba(255,156,35,1) 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffcb48', endColorstr='#ff9c23',GradientType=0 );
}
.greenColor {
  background: rgb(100,200,100);
  background: -moz-linear-gradient(top,  rgba(100,200,100,1) 0%, rgba(100,140,100,1) 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(100,200,0,1)), color-stop(100%,rgba(100,140,0,1)));
  background: -webkit-linear-gradient(top,  rgba(100,200,100,1) 0%,rgba(100,140,100,1) 100%);
  background: -o-linear-gradient(top,  rgba(100,200,100,1) 0%,rgba(100,140,100,1) 100%);
  background: -ms-linear-gradient(top,  rgba(100,200,100,1) 0%,rgba(100,140,100,1) 100%);
  background: linear-gradient(to bottom,  rgba(100,200,100,1) 0%,rgba(100,140,100,1) 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#64c864', endColorstr='#ff8c00',GradientType=0 );
  border: 1px solid #e59500;
} 
.greenColor:hover {
  background: rgb(100,203,72);
  background: -moz-linear-gradient(top,  rgba(100,203,72,1) 0%, rgba(100,156,35,1) 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(100,203,72,1)), color-stop(100%,rgba(100,156,35,1)));
  background: -webkit-linear-gradient(top,  rgba(100,203,72,1) 0%,rgba(100,156,35,1) 100%);
  background: -o-linear-gradient(top,  rgba(100,203,72,1) 0%,rgba(100,156,35,1) 100%);
  background: -ms-linear-gradient(top,  rgba(100,203,72,1) 0%,rgba(100,156,35,1) 100%);
  background: linear-gradient(to bottom,  rgba(100,203,72,1) 0%,rgba(100,156,35,1) 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#64c864', endColorstr='#ff9c23',GradientType=0 );
}
.button-bevel {
  vertical-align: top;
  border-radius: 4px;
  border: none;
  padding: 10px 25px 12px;
} 
.button-bevel:active {
    position: relative;
    top: 5px;
} 
.button-bevel.orange {
  box-shadow: #c46d00 0 6px 0px, rgba(0, 0, 0, 0.3) 0 10px 3px;
}
.button-bevel.orange:active {
  box-shadow: #c46d00 0 3px 0, rgba(0, 0, 0, 0.2) 0 6px 3px;  
}
.button-bevel.magenta {
  box-shadow: #ca075c 0 6px 0px, rgba(0, 0, 0, 0.3) 0 10px 3px;
}
.button-bevel.magenta:active {
box-shadow: #ca075c 0 3px 0, rgba(0, 0, 0, 0.2) 0 6px 3px;  
}
.button-bevel.cyan {
  box-shadow: #1994d3 0 6px 0px, rgba(0, 0, 0, 0.3) 0 10px 3px;
}
.button-bevel.cyan:active {
box-shadow: #1994d3 0 3px 0, rgba(0, 0, 0, 0.2) 0 6px 3px;  
}
.button-bevel.red {
  box-shadow: #88180e 0 6px 0px, rgba(0, 0, 0, 0.3) 0 10px 3px;
}
.button-bevel.red:active {
box-shadow: #88180e 0 3px 0, rgba(0, 0, 0, 0.2) 0 6px 3px;  
}
.button-bevel.black {
  box-shadow: #000 0 6px 0px, rgba(0, 0, 0, 0.3) 0 10px 3px, inset rgba(255, 255, 255, 0.3) 0 0 3px;
}
.button-bevel.black:active {
box-shadow: #000 0 3px 0, rgba(0, 0, 0, 0.2) 0 6px 3px, inset rgba(255, 255, 255, 0.3) 0 0 3px;  
}
.button-bevel.green {
  box-shadow: #439230 0 6px 0px, rgba(0, 0, 0, 0.3) 0 10px 3px;
}
.button-bevel.green:active {
box-shadow: #439230 0 3px 0, rgba(0, 0, 0, 0.2) 0 6px 3px;  
}
.button span, .button-bevel span {
  font-family: 'EntypoRegular';
  font-size: 20px;
  font-weight: normal;
  vertical-align: middle; 
  line-height: 0;
  margin-right: .1em;
}




</style>