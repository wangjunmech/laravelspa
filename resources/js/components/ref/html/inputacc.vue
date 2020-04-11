<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    <h3>input的file类型的accept属性的值</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-box"><table cellspacing="0"><tbody>
                            <tr><th>值</th>
                                <th>描述</th>
                            </tr>
                            <tr><td>audio/*</td>
                                <td>接受所有的声音文件。</td>
                            </tr>
                            <tr><td>video/*</td>
                                <td>接受所有的视频文件。</td>
                            </tr>
                            <tr><td>image/*</td>
                                <td>接受所有的图像文件。</td>
                            </tr>
                            <tr><td><em>MIME_type</em></td>
                            <td>一个有效的 MIME 类型，不带参数。请参阅&nbsp;<a href="http://www.iana.org/assignments/media-types/" rel="nofollow">IANA MIME 类型</a>，获得标准 MIME 类型的完整列表。</td>
                        </tr></tbody></table></div>
                        <hr>
                        <div>
                            在上传文件的时候，需要限制指定的文件类型，accept这个属性，只在FF和chrome中有效。那么accept能限制哪些文件呢？见下表。扩展名 MIME 描述
                        </div>


                        <table border="0"><tbody>
                            <tr><th>扩展名</th>
                                <th>值</th>
                                <th>描述</th>
                            </tr>
                            <tr><td>*.3gpp</td>
                                <td>audio/3gpp, video/3gpp</td>
                                <td>3GPP Audio/Video</td>
                            </tr><tr><td>*.ac3</td>
                                <td>audio/ac3</td>
                                <td>AC3 Audio</td>
                            </tr><tr><td>*.asf</td>
                                <td>allpication/vnd.ms-asf</td>
                                <td>Advanced Streaming Format</td>
                            </tr><tr><td>*.au</td>
                                <td>audio/basic</td>
                                <td>AU Audio</td>
                            </tr><tr><td>*.css</td>
                                <td>text/css</td>
                                <td>Cascading Style Sheets</td>
                            </tr><tr><td>*.csv</td>
                                <td>text/csv</td>
                                <td>Comma Separated Values</td>
                            </tr><tr><td>*.doc</td>
                                <td>application/msword</td>
                                <td>MS Word Document</td>
                            </tr><tr><td>*.dot</td>
                                <td>application/msword</td>
                                <td>MS Word Template</td>
                            </tr><tr><td>*.dtd</td>
                                <td>application/xml-dtd</td>
                                <td>Document Type Definition</td>
                            </tr><tr><td>*.dwg</td>
                                <td>image/vnd.dwg</td>
                                <td>AutoCAD Drawing Database</td>
                            </tr><tr><td>*.dxf</td>
                                <td>image/vnd.dxf</td>
                                <td>AutoCAD Drawing Interchange Format</td>
                            </tr><tr><td>*.gif</td>
                                <td>image/gif</td>
                                <td>Graphic Interchange Format</td>
                            </tr><tr><td>*.htm</td>
                                <td>text/html</td>
                                <td>HyperText Markup Language</td>
                            </tr><tr><td>*.html</td>
                                <td>text/html</td>
                                <td>HyperText Markup Language</td>
                            </tr><tr><td>*.jp2</td>
                                <td>image/jp2</td>
                                <td>JPEG-2000</td>
                            </tr><tr><td>*.jpe</td>
                                <td>image/jpeg</td>
                                <td>JPEG</td>
                            </tr><tr><td>*.jpeg</td>
                                <td>image/jpeg</td>
                                <td>JPEG</td>
                            </tr><tr><td>*.jpg</td>
                                <td>image/jpeg</td>
                                <td>JPEG</td>
                            </tr><tr><td>*.js</td>
                                <td>text/javascript, application/javascript</td>
                                <td>JavaScript</td>
                            </tr><tr><td>*.json</td>
                                <td>application/json</td>
                                <td>JavaScript Object Notation</td>
                            </tr><tr><td>*.mp2</td>
                                <td>audio/mpeg, video/mpeg</td>
                                <td>MPEG Audio/Video Stream, Layer II</td>
                            </tr><tr><td>*.mp3</td>
                                <td>audio/mpeg</td>
                                <td>MPEG Audio Stream, Layer III</td>
                            </tr><tr><td>*.mp4</td>
                                <td>audio/mp4, video/mp4</td>
                                <td>MPEG-4 Audio/Video</td>
                            </tr><tr><td>*.mpeg</td>
                                <td>video/mpeg</td>
                                <td>MPEG Video Stream, Layer II</td>
                            </tr><tr><td>*.mpg</td>
                                <td>video/mpeg</td>
                                <td>MPEG Video Stream, Layer II</td>
                            </tr><tr><td>*.mpp</td>
                                <td>application/vnd.ms-project</td>
                                <td>MS Project Project</td>
                            </tr><tr><td>*.ogg</td>
                                <td>application/ogg, audio/ogg</td>
                                <td>Ogg Vorbis</td>
                            </tr><tr><td>*.pdf</td>
                                <td>application/pdf</td>
                                <td>Portable Document Format</td>
                            </tr><tr><td>*.png</td>
                                <td>image/png</td>
                                <td>Portable Network Graphics</td>
                            </tr><tr><td>*.pot</td>
                                <td>application/vnd.ms-powerpoint</td>
                                <td>MS PowerPoint Template</td>
                            </tr><tr><td>*.pps</td>
                                <td>application/vnd.ms-powerpoint</td>
                                <td>MS PowerPoint Slideshow</td>
                            </tr><tr><td>*.ppt</td>
                                <td>application/vnd.ms-powerpoint</td>
                                <td>MS PowerPoint Presentation</td>
                            </tr><tr><td>*.rtf</td>
                                <td>application/rtf, text/rtf</td>
                                <td>Rich Text Format</td>
                            </tr><tr><td>*.svf</td>
                                <td>image/vnd.svf</td>
                                <td>Simple Vector Format</td>
                            </tr><tr><td>*.tif</td>
                                <td>image/tiff</td>
                                <td>Tagged Image Format File</td>
                            </tr><tr><td>*.tiff</td>
                                <td>image/tiff</td>
                                <td>Tagged Image Format File</td>
                            </tr><tr><td>*.txt</td>
                                <td>text/plain</td>
                                <td>Plain Text</td>
                            </tr><tr><td>*.wdb</td>
                                <td>application/vnd.ms-works</td>
                                <td>MS Works Database</td>
                            </tr><tr><td>*.wps</td>
                                <td>application/vnd.ms-works</td>
                                <td>Works Text Document</td>
                            </tr><tr><td>*.xhtml</td>
                                <td>application/xhtml+xml</td>
                                <td>Extensible HyperText Markup Language</td>
                            </tr><tr><td>*.xlc</td>
                                <td>application/vnd.ms-excel</td>
                                <td>MS Excel Chart</td>
                            </tr><tr><td>*.xlm</td>
                                <td>application/vnd.ms-excel</td>
                                <td>MS Excel Macro</td>
                            </tr><tr><td>*.xls</td>
                                <td>application/vnd.ms-excel</td>
                                <td>MS Excel Spreadsheet</td>
                            </tr><tr><td>*.xlt</td>
                                <td>application/vnd.ms-excel</td>
                                <td>MS Excel Template</td>
                            </tr><tr><td>*.xlw</td>
                                <td>application/vnd.ms-excel</td>
                                <td>MS Excel Workspace</td>
                            </tr><tr><td>*.xml</td>
                                <td>text/xml, application/xml</td>
                                <td>Extensible Markup Language</td>
                            </tr><tr><td>*.zip</td>
                                <td>application/zip</td>
                                <td>Compressed Archive</td>
                            </tr></tbody></table>
                        
                        
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
