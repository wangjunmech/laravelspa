<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h2><a href="https://git-scm.com/book/en/v2/">Github教程</a>  &nbsp;&nbsp;&nbsp;<a href="https://www.liaoxuefeng.com/wiki/896043488029600/897271968352576">廖雪峰老师提供的平台</a></h2></div>
                    <div class="card-body">
                        <div>
        <p class="theme">目录操作命令</p>
        <p>
            <ul class="exp">                        
                  <li><span>进入D盘：$ cd D:</span></li>
                  <li><span>进入D盘的Git目录：$ cd Git</span></li>
                  <li><span>进入D:/Git/demo目录：$ cd demo.</span></li>
                  <li><span>返回上一级目录：cd ../</span></li>
                  <li><span>创建目录命令：$ mkdir D:/Git/demo.</span></li>
                  <li><span>进入创建的目录：$ cd D:/Git/demo.</span></li>
                  <li><span>显示当前目录：$ pwd</span></li>
            </ul>

        <p class="theme">本地创建项目并关联到远程仓库</p>
        <p>
            <ul class="exp">                        
                  <li><span>1. 新建本地目录并打开进里面右键执行gitbash</span></li>
                  <li><span>2. $ git init 初始化项目</span></li>
                  <li><span>3. $ git remote add oritin git@github.com:用户名/仓库名.git 把本地仓库与远程仓库关联</span></li>
                  <li><span>4. $ git add -A 本地目录中创建文件后使用此命令先把Workspace：工作区中的所有文件提交本地暂存区Index / Stage中</span></li>
                  <li><span>5. $ git commit -m 提交注释 将本地暂存区Index / Stage中的文件提交到本地仓库</span></li>
                  <li><span>6. $ git push origin master 将本地仓库的内容推送到远程仓库</span></li>
            </ul>

        <p class="theme">在网上远程仓库创建添加文件后拉取到本地</p>
        <p>
            <ul class="exp">                        
                  <li><span>1. 进入到网页仓库，点Addfile有Create new file 或Upload files进行文件添加</span></li>
                  <li><span>2. $ git pull origin master 命令将远程文件同步至本地仓库</span></li>

            </ul>
        </p>


        <p class="theme">标签操作tag</p>
        <p>Git 支持两种标签：轻量标签（lightweight）与附注标签（annotated）。</p>
        <p>

            <ul class="exp">                        
                  <li><span>1. $ git tag 查看已经有的标签</span></li>
                  <li><span>2. $ git tag v0.1 后面加参数v0.1打标签, 可以加参数git tag -a v0.1 -m "标签注释内容"</span></li>
                  <li><span>3. $ git push origin v0.2 推送标签v0.2到远程仓库</span></li>
                  <li><span>4. $ git tag -d v0.1 删除本地标签v0.1</span></li>
                  <li><span>5. $ git push origin :refs/tags/v0.1 删除远程标签v0.1</span></li>
                  <li><span>5. $ git tag -a v0.2 9fceb02 给已有的提交9fceb02 打标签v0.2</span></li>
            </ul>
        </p>
        <p class="theme"><a href="https://git-scm.com/book/zh/v2/Git-%E5%9F%BA%E7%A1%80-%E6%9F%A5%E7%9C%8B%E6%8F%90%E4%BA%A4%E5%8E%86%E5%8F%B2">查看提交记录</a></p>
        <p>
            <ul class="exp">                        
                  <li><span>1. $ git log 查看提交历史</span></li>
                  <li><span>2. $ git log -p -2 查看最近两条提交的详细信息，选项-p 或 --patch显示详细差异</span></li>
                  <li><span>3. $ git log --stat 查看提交记录的简略统计信息</span></li>
                  <li><span>4. $ git log --abbrev-commit 显示简略提交</span></li>
                  <li><span>5. $ git log --graph 分支形式显示提交历史</span></li>
                  <li><span>6. $ git log --pretty=format:"%h %s" --graph 加pretty=参数格式化显示提交历史</span></li>
                  <li><span>7. $ git log --oneline最简化一行显示一个提交历史</span></li>
                  <li><span>8. $ git log --since=2.weeks 筛选显示最近2周的提交历史</span></li>
                  <li><span>9. $ git log -S function_name 筛选显示有增加或删除function_name的提交历史</span></li>

            </ul>
        </p>
        <p class="theme">88888</p>
        <p>
            <ul class="exp">                        
                  <li><span>1. 新建本地目录并打开进里面右键执行gitbash</span></li>
                  <li><span>2. $ git init 初始化项目</span></li>

            </ul>
        </p>
        <p class="theme">88888</p>
        <p>
            <ul class="exp">                        
                  <li><span>1. 新建本地目录并打开进里面右键执行gitbash</span></li>
                  <li><span>2. $ git init 初始化项目</span></li>

            </ul>
        </p>
        <p class="theme">88888</p>
        <p>
            <ul class="exp">                        
                  <li><span>1. 新建本地目录并打开进里面右键执行gitbash</span></li>
                  <li><span>2. $ git init 初始化项目</span></li>

            </ul>
        </p>
        <p class="theme">88888</p>
        <p>
            <ul class="exp">                        
                  <li><span>1. 新建本地目录并打开进里面右键执行gitbash</span></li>
                  <li><span>2. $ git init 初始化项目</span></li>

            </ul>
        </p>
                                   
                            <h2>一、新建代码库</h2>
<article class="baidu_pl">
        <div id="article_content" class="article_content clearfix">
        <link rel="stylesheet" href="https://csdnimg.cn/release/blogv2/dist/mdeditor/css/editerView/ck_htmledit_views-b5506197d8.css">
                <div id="content_views" class="htmledit_views">
                    <h1><a name="t0"></a><a name="t0"></a><strong>Git常用命令及方法大全</strong></h1> 
<p>&nbsp;</p> 
<blockquote> 
 <p>&nbsp;</p> 
 <p><img alt="" class="has" src="https://imgconvert.csdnimg.cn/aHR0cDovL3d3dy5ydWFueWlmZW5nLmNvbS9ibG9naW1nL2Fzc2V0LzIwMTUvYmcyMDE1MTIwOTAxLnBuZw?x-oss-process=image/format,png"></p> 
 <p>下面是我整理的常用 Git 命令清单。几个专用名词的译名如下。</p> 
 <blockquote> 
  <ul><li>Workspace：工作区</li><li>Index / Stage：暂存区</li><li>Repository：仓库区（或本地仓库）</li><li>Remote：远程仓库</li></ul>
 </blockquote> 
</blockquote> 
<blockquote> 
 <p>&nbsp;</p> 
 <h2><a name="t1"></a><a name="t1"></a><span style="color:#ff0000;"><strong>本地分支关联远程</strong></span></h2> 
 <pre><code class="hljs delphi">git branch --<span class="hljs-keyword">set</span>-upstream-<span class="hljs-keyword">to</span>=origin/分支名&nbsp;分支名</code><div class="hljs-button signin" data-title="登录后复制" data-report-click="{&quot;spm&quot;:&quot;1001.2101.3001.4259&quot;}" onclick="hljs.signin(event)"></div></pre> 
 <h2><a name="t2"></a><a name="t2"></a><span style="color:#ff0000;">代码库修改密码后push不上去怎么办？</span></h2> 
 <pre><code class="hljs delphi"><ol class="hljs-ln"><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="1"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment">// 重新输入密码</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="2"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">git config --system --unset credential.<span class="hljs-keyword">helper</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="3"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="4"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment">// 密码存储同步</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="5"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">git config --global credential.<span class="hljs-keyword">helper</span> store</div></div></li></ol></code><div class="hljs-button signin" data-title="登录后复制" data-report-click="{&quot;spm&quot;:&quot;1001.2101.3001.4259&quot;}" onclick="hljs.signin(event)"></div></pre> 
 <p>&nbsp;</p> 
</blockquote> 
<p>&nbsp;</p> 
<h2><a name="t3"></a><a name="t3"></a>一、新建代码库</h2> 
<blockquote> 
 <pre class="language-bash" name="code"><code class="language-bash hljs"><ol class="hljs-ln"><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="1"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="2"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 在当前目录新建一个Git代码库</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="3"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git init</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="4"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="5"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 新建一个目录，将其初始化为Git代码库</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="6"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git init [project-name]</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="7"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="8"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 下载一个项目和它的整个代码历史</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="9"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git <span class="hljs-built_in">clone</span> [url]</div></div></li></ol></code><div class="hljs-button signin" data-title="登录后复制" data-report-click="{&quot;spm&quot;:&quot;1001.2101.3001.4259&quot;}" onclick="hljs.signin(event)"></div></pre> 
</blockquote> 
<h2><a name="t4"></a><a name="t4"></a>二、配置</h2> 
<p>&nbsp;</p> 
<p>Git的设置文件为<code>.gitconfig</code>，它可以在用户主目录下（全局配置），也可以在项目目录下（项目配置）。</p> 
<blockquote> 
 <pre class="language-bash" name="code"><code class="language-bash hljs"><ol class="hljs-ln"><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="1"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="2"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 显示当前的Git配置</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="3"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git config --list</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="4"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="5"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 编辑Git配置文件</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="6"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git config -e [--global]</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="7"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="8"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 设置提交代码时的用户信息</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="9"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git config [--global] user.name <span class="hljs-string">"[name]"</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="10"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git config [--global] user.email <span class="hljs-string">"[email address]"</span></div></div></li></ol></code><div class="hljs-button signin" data-title="登录后复制" data-report-click="{&quot;spm&quot;:&quot;1001.2101.3001.4259&quot;}" onclick="hljs.signin(event)"></div></pre> 
</blockquote> 
<h2><a name="t5"></a><a name="t5"></a>三、增加/删除文件</h2> 
<blockquote> 
 <pre class="language-bash" name="code"><code class="language-bash hljs"><ol class="hljs-ln"><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="1"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="2"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 添加指定文件到暂存区</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="3"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git add [file1] [file2] ...</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="4"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="5"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 添加指定目录到暂存区，包括子目录</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="6"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git add [dir]</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="7"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="8"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 添加当前目录的所有文件到暂存区</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="9"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git add .</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="10"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="11"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 添加每个变化前，都会要求确认</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="12"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 对于同一个文件的多处变化，可以实现分次提交</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="13"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git add -p</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="14"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="15"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 删除工作区文件，并且将这次删除放入暂存区</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="16"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git rm [file1] [file2] ...</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="17"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="18"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 停止追踪指定文件，但该文件会保留在工作区</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="19"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git rm --cached [file]</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="20"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="21"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 改名文件，并且将这个改名放入暂存区</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="22"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git mv [file-original] [file-renamed]</div></div></li></ol></code><div class="hljs-button signin" data-title="登录后复制" data-report-click="{&quot;spm&quot;:&quot;1001.2101.3001.4259&quot;}" onclick="hljs.signin(event)"></div></pre> 
</blockquote> 
<h2><a name="t6"></a><a name="t6"></a>四、代码提交</h2> 
<blockquote> 
 <pre class="language-bash" name="code"><code class="language-bash hljs"><ol class="hljs-ln"><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="1"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="2"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 提交暂存区到仓库区</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="3"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git commit -m [message]</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="4"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="5"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 提交暂存区的指定文件到仓库区</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="6"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git commit [file1] [file2] ... -m [message]</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="7"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="8"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 提交工作区自上次commit之后的变化，直接到仓库区</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="9"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git commit -a</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="10"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="11"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 提交时显示所有diff信息</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="12"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git commit -v</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="13"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="14"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 使用一次新的commit，替代上一次提交</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="15"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 如果代码没有任何新变化，则用来改写上一次commit的提交信息</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="16"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git commit --amend -m [message]</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="17"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="18"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 重做上一次commit，并包括指定文件的新变化</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="19"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git commit --amend [file1] [file2] ...</div></div></li></ol></code><div class="hljs-button signin" data-title="登录后复制" data-report-click="{&quot;spm&quot;:&quot;1001.2101.3001.4259&quot;}" onclick="hljs.signin(event)"></div></pre> 
</blockquote> 
<h2><a name="t7"></a><a name="t7"></a>五、分支</h2> 
<blockquote> 
 <pre class="language-bash" name="code"><code class="language-bash hljs"><ol class="hljs-ln"><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="1"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="2"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 列出所有本地分支</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="3"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git branch</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="4"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="5"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 列出所有远程分支</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="6"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git branch -r</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="7"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="8"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 列出所有本地分支和远程分支</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="9"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git branch -a</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="10"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="11"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 新建一个分支，但依然停留在当前分支</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="12"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git branch [branch-name]</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="13"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="14"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 以远程分支为基础新建一个分支，并切换到该分支</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="15"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git checkout -b [branch] origin/[remote-branch]</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="16"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="17"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 新建一个分支，指向指定commit</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="18"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git branch [branch] [commit]</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="19"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="20"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 新建一个分支，与指定的远程分支建立追踪关系</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="21"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git branch --track [branch] [remote-branch]</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="22"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="23"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 切换到指定分支，并更新工作区</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="24"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git checkout [branch-name]</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="25"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="26"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 切换到上一个分支</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="27"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git checkout -</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="28"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="29"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 建立追踪关系，在现有分支与指定的远程分支之间</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="30"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git branch --<span class="hljs-built_in">set</span>-upstream [branch] [remote-branch]</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="31"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="32"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 合并指定分支到当前分支</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="33"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git merge [branch]</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="34"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="35"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 选择一个commit，合并进当前分支</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="36"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git cherry-pick [commit]</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="37"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="38"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 删除分支</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="39"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git branch -d [branch-name]</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="40"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="41"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 删除远程分支</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="42"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git push origin --delete [branch-name]</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="43"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git branch -dr [remote/branch]</div></div></li></ol></code><div class="hljs-button signin" data-title="登录后复制" data-report-click="{&quot;spm&quot;:&quot;1001.2101.3001.4259&quot;}" onclick="hljs.signin(event)"></div></pre> 
</blockquote> 
<h2><a name="t8"></a><a name="t8"></a>六、标签</h2> 
<blockquote> 
 <pre class="language-bash" name="code"><code class="language-bash hljs"><ol class="hljs-ln"><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="1"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="2"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 列出所有tag</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="3"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git tag</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="4"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="5"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 新建一个tag在当前commit</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="6"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git tag [tag]</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="7"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="8"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 新建一个tag在指定commit</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="9"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git tag [tag] [commit]</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="10"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="11"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 删除本地tag</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="12"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git tag -d [tag]</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="13"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="14"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 删除远程tag</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="15"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git push origin :refs/tags/[tagName]</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="16"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="17"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 查看tag信息</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="18"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git show [tag]</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="19"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="20"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 提交指定tag</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="21"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git push [remote] [tag]</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="22"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="23"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 提交所有tag</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="24"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git push [remote] --tags</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="25"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="26"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 新建一个分支，指向某个tag</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="27"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git checkout -b [branch] [tag]</div></div></li></ol></code><div class="hljs-button signin" data-title="登录后复制" data-report-click="{&quot;spm&quot;:&quot;1001.2101.3001.4259&quot;}" onclick="hljs.signin(event)"></div></pre> 
</blockquote> 
<h2><a name="t9"></a><a name="t9"></a>七、查看信息</h2> 
<blockquote> 
 <pre class="language-bash" name="code"><code class="language-bash hljs"><ol class="hljs-ln"><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="1"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="2"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 显示有变更的文件</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="3"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git status</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="4"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="5"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 显示当前分支的版本历史</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="6"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git <span class="hljs-built_in">log</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="7"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="8"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 显示commit历史，以及每次commit发生变更的文件</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="9"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git <span class="hljs-built_in">log</span> --<span class="hljs-built_in">stat</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="10"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="11"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 搜索提交历史，根据关键词</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="12"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git <span class="hljs-built_in">log</span> -S [keyword]</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="13"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="14"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 显示某个commit之后的所有变动，每个commit占据一行</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="15"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git <span class="hljs-built_in">log</span> [tag] HEAD --pretty=format:%s</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="16"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="17"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 显示某个commit之后的所有变动，其"提交说明"必须符合搜索条件</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="18"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git <span class="hljs-built_in">log</span> [tag] HEAD --grep feature</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="19"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="20"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 显示某个文件的版本历史，包括文件改名</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="21"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git <span class="hljs-built_in">log</span> --follow [file]</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="22"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git whatchanged [file]</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="23"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="24"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 显示指定文件相关的每一次diff</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="25"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git <span class="hljs-built_in">log</span> -p [file]</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="26"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="27"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 显示过去5次提交</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="28"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git <span class="hljs-built_in">log</span> -5 --pretty --oneline</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="29"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="30"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 显示所有提交过的用户，按提交次数排序</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="31"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git shortlog -sn</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="32"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="33"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 显示指定文件是什么人在什么时间修改过</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="34"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git blame [file]</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="35"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="36"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 显示暂存区和工作区的差异</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="37"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git diff</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="38"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="39"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 显示暂存区和上一个commit的差异</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="40"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git diff --cached [file]</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="41"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="42"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 显示工作区与当前分支最新commit之间的差异</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="43"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git diff HEAD</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="44"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="45"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 显示两次提交之间的差异</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="46"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git diff [first-branch]...[second-branch]</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="47"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="48"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 显示今天你写了多少行代码</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="49"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git diff --shortstat <span class="hljs-string">"@{0 day ago}"</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="50"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="51"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 显示某次提交的元数据和内容变化</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="52"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git show [commit]</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="53"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="54"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 显示某次提交发生变化的文件</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="55"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git show --name-only [commit]</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="56"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="57"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 显示某次提交时，某个文件的内容</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="58"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git show [commit]:[filename]</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="59"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="60"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 显示当前分支的最近几次提交</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="61"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git reflog</div></div></li></ol></code><div class="hljs-button signin" data-title="登录后复制" data-report-click="{&quot;spm&quot;:&quot;1001.2101.3001.4259&quot;}" onclick="hljs.signin(event)"></div></pre> 
</blockquote> 
<h2><a name="t10"></a><a name="t10"></a>八、远程同步</h2> 
<blockquote> 
 <pre class="language-bash" name="code"><code class="language-bash hljs"><ol class="hljs-ln"><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="1"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="2"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 下载远程仓库的所有变动</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="3"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git fetch [remote]</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="4"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="5"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 显示所有远程仓库</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="6"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git remote -v</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="7"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="8"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 显示某个远程仓库的信息</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="9"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git remote show [remote]</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="10"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="11"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 增加一个新的远程仓库，并命名</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="12"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git remote add [shortname] [url]</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="13"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="14"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 取回远程仓库的变化，并与本地分支合并</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="15"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git pull [remote] [branch]</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="16"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="17"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 上传本地指定分支到远程仓库</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="18"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git push [remote] [branch]</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="19"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="20"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 强行推送当前分支到远程仓库，即使有冲突</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="21"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git push [remote] --force</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="22"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="23"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 推送所有分支到远程仓库</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="24"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git push [remote] --all</div></div></li></ol></code><div class="hljs-button signin" data-title="登录后复制" data-report-click="{&quot;spm&quot;:&quot;1001.2101.3001.4259&quot;}" onclick="hljs.signin(event)"></div></pre> 
</blockquote> 
<h2><a name="t11"></a><a name="t11"></a>九、撤销</h2> 
<blockquote> 
 <pre class="language-bash" name="code"><code class="language-bash hljs"><ol class="hljs-ln"><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="1"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="2"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 恢复暂存区的指定文件到工作区</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="3"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git checkout [file]</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="4"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="5"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 恢复某个commit的指定文件到暂存区和工作区</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="6"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git checkout [commit] [file]</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="7"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="8"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 恢复暂存区的所有文件到工作区</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="9"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git checkout .</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="10"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="11"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 重置暂存区的指定文件，与上一次commit保持一致，但工作区不变</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="12"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git reset [file]</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="13"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="14"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 重置暂存区与工作区，与上一次commit保持一致</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="15"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git reset --hard</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="16"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="17"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 重置当前分支的指针为指定commit，同时重置暂存区，但工作区不变</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="18"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git reset [commit]</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="19"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="20"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 重置当前分支的HEAD为指定commit，同时重置暂存区和工作区，与指定commit一致</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="21"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git reset --hard [commit]</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="22"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="23"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 重置当前HEAD为指定commit，但保持暂存区和工作区不变</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="24"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git reset --keep [commit]</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="25"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="26"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 新建一个commit，用来撤销指定commit</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="27"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 后者的所有变化都将被前者抵消，并且应用到当前分支</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="28"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git revert [commit]</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="29"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="30"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 暂时将未提交的变化移除，稍后再移入</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="31"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git stash</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="32"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git stash pop</div></div></li></ol></code><div class="hljs-button signin" data-title="登录后复制" data-report-click="{&quot;spm&quot;:&quot;1001.2101.3001.4259&quot;}" onclick="hljs.signin(event)"></div></pre> 
</blockquote> 
<h2><a name="t12"></a><a name="t12"></a>十、其他</h2> 
<blockquote> 
 <pre class="language-bash" name="code"><code class="language-bash hljs"><ol class="hljs-ln"><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="1"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="2"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-comment"># 生成一个可供发布的压缩包</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="3"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git archive</div></div></li></ol></code><div class="hljs-button signin" data-title="登录后复制" data-report-click="{&quot;spm&quot;:&quot;1001.2101.3001.4259&quot;}" onclick="hljs.signin(event)"></div></pre> 
</blockquote> 
<h1><a name="t13"></a><a name="t13"></a>Git分支管理策略</h1> 
<p>&nbsp;</p> 
<p><strong>一、主分支Master</strong></p> 
<p>首先，代码库应该有一个、且仅有一个主分支。所有提供给用户使用的正式版本，都在这个主分支上发布。</p> 
<p><img alt="" class="has" src="https://imgconvert.csdnimg.cn/aHR0cDovL3d3dy5ydWFueWlmZW5nLmNvbS9ibG9naW1nL2Fzc2V0LzIwMTIwNy9iZzIwMTIwNzA1MDMucG5n?x-oss-process=image/format,png"></p> 
<p>Git主分支的名字，默认叫做Master。它是自动建立的，版本库初始化以后，默认就是在主分支在进行开发。</p> 
<p><strong>二、开发分支Develop</strong></p> 
<p>主分支只用来分布重大版本，日常开发应该在另一条分支上完成。我们把开发用的分支，叫做Develop。</p> 
<p><img alt="" class="has" src="https://imgconvert.csdnimg.cn/aHR0cDovL3d3dy5ydWFueWlmZW5nLmNvbS9ibG9naW1nL2Fzc2V0LzIwMTIwNy9iZzIwMTIwNzA1MDQucG5n?x-oss-process=image/format,png"></p> 
<p>这个分支可以用来生成代码的最新隔夜版本（nightly）。如果想正式对外发布，就在Master分支上，对Develop分支进行"合并"（merge）。</p> 
<p>Git创建Develop分支的命令：</p> 
<blockquote> 
 <p>　　git checkout -b develop master</p> 
</blockquote> 
<p>将Develop分支发布到Master分支的命令：</p> 
<blockquote> 
 <p>　　# 切换到Master分支<br> 　　git checkout master</p> 
 <p>　　# 对Develop分支进行合并<br> 　　git merge --no-ff develop</p> 
</blockquote> 
<p>这里稍微解释一下，上一条命令的--no-ff参数是什么意思。默认情况下，Git执行"快进式合并"（fast-farward merge），会直接将Master分支指向Develop分支。</p> 
<p><img alt="" class="has" src="https://imgconvert.csdnimg.cn/aHR0cDovL3d3dy5ydWFueWlmZW5nLmNvbS9ibG9naW1nL2Fzc2V0LzIwMTIwNy9iZzIwMTIwNzA1MDUucG5n?x-oss-process=image/format,png"></p> 
<p>使用--no-ff参数后，会执行正常合并，在Master分支上生成一个新节点。为了保证版本演进的清晰，我们希望采用这种做法。关于合并的更多解释，请参考Benjamin Sandofsky的<a href="http://sandofsky.com/blog/git-workflow.html">《Understanding the Git Workflow》</a>。</p> 
<p><img alt="" class="has" src="https://imgconvert.csdnimg.cn/aHR0cDovL3d3dy5ydWFueWlmZW5nLmNvbS9ibG9naW1nL2Fzc2V0LzIwMTIwNy9iZzIwMTIwNzA1MDYucG5n?x-oss-process=image/format,png"></p> 
<p><strong>三、临时性分支</strong></p> 
<p>前面讲到版本库的两条主要分支：Master和Develop。前者用于正式发布，后者用于日常开发。其实，常设分支只需要这两条就够了，不需要其他了。</p> 
<p>但是，除了常设分支以外，还有一些临时性分支，用于应对一些特定目的的版本开发。临时性分支主要有三种：</p> 
<blockquote> 
 <p>　　* 功能（feature）分支</p> 
 <p>　　* 预发布（release）分支</p> 
 <p>　　* 修补bug（fixbug）分支</p> 
</blockquote> 
<p>这三种分支都属于临时性需要，使用完以后，应该删除，使得代码库的常设分支始终只有Master和Develop。</p> 
<p><strong>四、 功能分支</strong></p> 
<p>接下来，一个个来看这三种"临时性分支"。</p> 
<p>第一种是功能分支，它是为了开发某种特定功能，从Develop分支上面分出来的。开发完成后，要再并入Develop。</p> 
<p><img alt="" class="has" src="https://imgconvert.csdnimg.cn/aHR0cDovL3d3dy5ydWFueWlmZW5nLmNvbS9ibG9naW1nL2Fzc2V0LzIwMTIwNy9iZzIwMTIwNzA1MDcucG5n?x-oss-process=image/format,png"></p> 
<p>功能分支的名字，可以采用feature-*的形式命名。</p> 
<p>创建一个功能分支：</p> 
<blockquote> 
 <p>　　git checkout -b feature-x develop</p> 
</blockquote> 
<p>开发完成后，将功能分支合并到develop分支：</p> 
<blockquote> 
 <p>　　git checkout develop</p> 
 <p>　　git merge --no-ff feature-x</p> 
</blockquote> 
<p>删除feature分支：</p> 
<blockquote> 
 <p>　　git branch -d feature-x</p> 
</blockquote> 
<p><strong>五、预发布分支</strong></p> 
<p>第二种是预发布分支，它是指发布正式版本之前（即合并到Master分支之前），我们可能需要有一个预发布的版本进行测试。</p> 
<p>预发布分支是从Develop分支上面分出来的，预发布结束以后，必须合并进Develop和Master分支。它的命名，可以采用release-*的形式。</p> 
<p>创建一个预发布分支：</p> 
<blockquote> 
 <p>　　git checkout -b release-1.2 develop</p> 
</blockquote> 
<p>确认没有问题后，合并到master分支：</p> 
<blockquote> 
 <p>　　git checkout master</p> 
 <p>　　git merge --no-ff release-1.2</p> 
 <p>　　# 对合并生成的新节点，做一个标签<br> 　　git tag -a 1.2</p> 
</blockquote> 
<p>再合并到develop分支：</p> 
<blockquote> 
 <p>　　git checkout develop</p> 
 <p>　　git merge --no-ff release-1.2</p> 
</blockquote> 
<p>最后，删除预发布分支：</p> 
<blockquote> 
 <p>　　git branch -d release-1.2</p> 
</blockquote> 
<p><strong>六、修补bug分支</strong></p> 
<p>最后一种是修补bug分支。软件正式发布以后，难免会出现bug。这时就需要创建一个分支，进行bug修补。</p> 
<p>修补bug分支是从Master分支上面分出来的。修补结束以后，再合并进Master和Develop分支。它的命名，可以采用fixbug-*的形式。</p> 
<p><img alt="" class="has" src="https://imgconvert.csdnimg.cn/aHR0cDovL3d3dy5ydWFueWlmZW5nLmNvbS9ibG9naW1nL2Fzc2V0LzIwMTIwNy9iZzIwMTIwNzA1MDgucG5n?x-oss-process=image/format,png"></p> 
<p>创建一个修补bug分支：</p> 
<blockquote> 
 <p>　　git checkout -b fixbug-0.1 master</p> 
</blockquote> 
<p>修补结束后，合并到master分支：</p> 
<blockquote> 
 <p>　　git checkout master</p> 
 <p>　　git merge --no-ff fixbug-0.1</p> 
 <p>　　git tag -a 0.1.1</p> 
</blockquote> 
<p>再合并到develop分支：</p> 
<blockquote> 
 <p>　　git checkout develop</p> 
 <p>　　git merge --no-ff fixbug-0.1</p> 
</blockquote> 
<p>最后，删除"修补bug分支"：</p> 
<blockquote> 
 <p>　　git branch -d fixbug-0.1</p> 
</blockquote> 
<p>&nbsp;</p> 
<h1><a name="t14"></a><a name="t14"></a><span style="color:#ff0000;">版本回退-撤销文件修改</span></h1> 
<p>{针对文件修改恢复}</p> 
<h2><a name="t15"></a><a name="t15"></a>工作区修改一个文件后，又想回到修改前(git add前)</h2> 
<p>1. 当然可以直接手动再在工作区中将文件修改回去</p> 
<p>2. 修改后，通过命令git status查看</p> 
<pre class="has" name="code"><code class="language-html hljs xml"><ol class="hljs-ln"><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="1"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git status</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="2"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"># On branch master</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="3"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"># Changes not staged for commit:</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="4"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">#   (use "git add <span class="hljs-tag">&lt;<span class="hljs-name">file</span>&gt;</span>..." to update what will be committed)</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="5"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">#   (use "git checkout -- <span class="hljs-tag">&lt;<span class="hljs-name">file</span>&gt;</span>..." to discard changes in working directory)</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="6"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">#</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="7"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">#       modified:   readme.txt</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="8"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">#</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="9"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">no changes added to commit (use "git add" and/or "git commit -a")</div></div></li></ol></code><div class="hljs-button signin" data-title="登录后复制" data-report-click="{&quot;spm&quot;:&quot;1001.2101.3001.4259&quot;}" onclick="hljs.signin(event)"></div></pre> 
<p>这时Git会告诉你，git checkout -- file可以丢弃工作区的修改：</p> 
<pre class="has" name="code"><code class="language-html hljs xml">$ git checkout -- readme.txt
</code><div class="hljs-button signin" data-title="登录后复制" data-report-click="{&quot;spm&quot;:&quot;1001.2101.3001.4259&quot;}" onclick="hljs.signin(event)"></div></pre> 
<p><strong>Note</strong>:</p> 
<p>1. <span style="color:#dd0055;">git checkout -- file</span>命令中的<span style="color:#dd0055;">--</span>很重要，没有<span style="color:#dd0055;">--</span>，就变成了“切换到另一个分支”的命令，我们在后面的分支管理中会再次遇到<span style="color:#dd0055;">git checkout</span>命令。</p> 
<p>2. 命令git checkout -- readme.txt意思就是，把readme.txt文件在工作区的修改全部撤销，这里有两种情况：</p> 
<p>一种是readme.txt自修改后还没有被放到暂存区，现在，撤销修改就回到和版本库一模一样的状态；一种是readme.txt已经添加到暂存区后，又作了修改，现在，撤销修改就回到添加到暂存区后的状态。总之，就是让这个文件回到最近一次git commit或git add时的状态。</p> 
<p>3.&nbsp;工作区、暂存区的概念不清楚的可见于<a href="http://blog.csdn.net/pipisorry/article/details/44588351">Git版本控制教程 - Git本地仓库</a></p> 
<h2><a name="t16"></a><a name="t16"></a>如果在工作区中修改了文件还git add到暂存区（但是在commit之前）</h2> 
<p>用<span style="color:#dd0055;">git status</span>查看一下，修改只是添加到了暂存区，还没有提交：</p> 
<pre class="has" name="code"><code class="language-html hljs xml"><ol class="hljs-ln"><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="1"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git status</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="2"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"># On branch master</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="3"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"># Changes to be committed:</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="4"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">#   (use "git reset HEAD <span class="hljs-tag">&lt;<span class="hljs-name">file</span>&gt;</span>..." to unstage)</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="5"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">#</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="6"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">#       modified:   readme.txt</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="7"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">#</div></div></li></ol></code><div class="hljs-button signin" data-title="登录后复制" data-report-click="{&quot;spm&quot;:&quot;1001.2101.3001.4259&quot;}" onclick="hljs.signin(event)"></div></pre> 
<p>Git同样告诉我们，用命令<span style="color:#dd0055;">git reset HEAD file</span>可以<span style="color:#ff0000;">把暂存区的修改撤销掉（unstage），重新放回工作区</span>：</p> 
<pre class="has" name="code"><code class="language-html hljs xml"><ol class="hljs-ln"><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="1"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git reset HEAD readme.txt</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="2"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">Unstaged changes after reset:</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="3"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">M       readme.txt</div></div></li></ol></code><div class="hljs-button signin" data-title="登录后复制" data-report-click="{&quot;spm&quot;:&quot;1001.2101.3001.4259&quot;}" onclick="hljs.signin(event)"></div></pre> 
<p><span style="color:#dd0055;">git reset</span>命令既可以回退版本，也可以把暂存区的修改回退到工作区。当我们用<span style="color:#dd0055;">HEAD</span>时，表示最新的版本。</p> 
<p>再用git status查看一下，现在暂存区是干净的，工作区有修改。</p> 
<p>然后丢弃工作区的修改</p> 
<pre class="has" name="code"><code class="language-html hljs xml"><ol class="hljs-ln"><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="1"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git checkout -- readme.txt</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="2"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="3"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git status</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="4"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"># On branch master</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="5"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">nothing to commit (working directory clean)</div></div></li></ol></code><div class="hljs-button signin" data-title="登录后复制" data-report-click="{&quot;spm&quot;:&quot;1001.2101.3001.4259&quot;}" onclick="hljs.signin(event)"></div></pre> 
<h2><a name="t17"></a><a name="t17"></a>不但修改了文件还从暂存区提交commit到了版本库 - 版本回退</h2> 
<p>版本回退可以回退到上一个版本。不过，这是有条件的，就是你还没有把自己的本地版本库推送到远程。Git是分布式版本控制系统。</p> 
<p>在工作中对某个文件（如readme.txt）进行多次修改交commit。</p> 
<p>可以通过版本控制系统命令告诉我们提交的历史记录，在Git中，我们用<span style="color:#dd0055;">git log</span>命令查看：</p> 
<pre class="has" name="code"><code class="language-html hljs xml"><ol class="hljs-ln"><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="1"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git log</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="2"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">commit 3628164fb26d48395383f8f31179f24e0882e1e0</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="3"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">Author: Michael Liao <span class="hljs-tag">&lt;<span class="hljs-name">askxuefeng@gmail.com</span>&gt;</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="4"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">Date:   Tue Aug 20 15:11:49 2013 +0800</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="5"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="6"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">    append GPL</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="7"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="8"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">commit ea34578d5496d7dd233c827ed32a8cd576c5ee85</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="9"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">Author: Michael Liao <span class="hljs-tag">&lt;<span class="hljs-name">askxuefeng@gmail.com</span>&gt;</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="10"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">Date:   Tue Aug 20 14:53:12 2013 +0800</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="11"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="12"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">    add distributed</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="13"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="14"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">commit cb926e7ea50ad11b8f9e909c05226233bf755030</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="15"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">Author: Michael Liao <span class="hljs-tag">&lt;<span class="hljs-name">askxuefeng@gmail.com</span>&gt;</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="16"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">Date:   Mon Aug 19 17:51:55 2013 +0800</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="17"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="18"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">    wrote a readme file</div></div></li></ol></code><div class="hljs-button signin" data-title="登录后复制" data-report-click="{&quot;spm&quot;:&quot;1001.2101.3001.4259&quot;}" onclick="hljs.signin(event)"></div></pre> 
<p><strong>Note</strong>:</p> 
<p>1.&nbsp;git log命令显示从最近到最远的提交日志，我们可以看到3次提交，最近的一次是<span style="color:#dd0055;">append GPL</span>，上一次是<span style="color:#dd0055;">add distributed</span>，最早的一次是<span style="color:#dd0055;">wrote a readme file</span>。</p> 
<p>2. 如果嫌输出信息太多，看得眼花缭乱的，可以试试加上<span style="color:#dd0055;">--pretty=oneline</span>参数：</p> 
<pre class="has" name="code"><code class="language-html hljs xml"><ol class="hljs-ln"><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="1"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git log --pretty=oneline</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="2"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">3628164fb26d48395383f8f31179f24e0882e1e0 append GPL</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="3"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">ea34578d5496d7dd233c827ed32a8cd576c5ee85 add distributed</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="4"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">cb926e7ea50ad11b8f9e909c05226233bf755030 wrote a readme file</div></div></li></ol></code><div class="hljs-button signin" data-title="登录后复制" data-report-click="{&quot;spm&quot;:&quot;1001.2101.3001.4259&quot;}" onclick="hljs.signin(event)"></div></pre> 
<p>3.&nbsp;你看到的一大串类似3628164...882e1e0的是commit id（版本号），和SVN不一样，Git的commit id不是1，2，3……递增的数字，而是一个SHA1计算出来的一个非常大的数字，用十六进制表示，而且你看到的commit id和我的肯定不一样，以你自己的为准。为什么commit id需要用这么一大串数字表示呢？因为Git是分布式的版本控制系统，后面我们还要研究多人在同一个版本库里工作，如果大家都用1，2，3……作为版本号，那肯定就冲突了。</p> 
<p>4.&nbsp;每提交一个新版本，实际上Git就会把它们自动串成一条时间线。如果使用可视化工具（如GitX、github的客户端、pycharm）查看Git历史，就可以更清楚地看到提交历史的时间线。</p> 
<h3><a name="t18"></a><a name="t18"></a>现在我们想要把readme.txt回退到上一个版本</h3> 
<p>如“add distributed”的那个版本，怎么做呢？首先，Git必须知道当前版本是哪个版本，在Git中，用<span style="color:#dd0055;">HEAD</span>表示当前版本，也就是最新的提交<span style="color:#dd0055;">3628164...882e1e0</span>（注意我的提交ID和你的肯定不一样），上一个版本就是<span style="color:#dd0055;">HEAD^</span>，上上一个版本就是<span style="color:#dd0055;">HEAD^^</span>，当然往上100个版本写100个<span style="color:#dd0055;">^</span>比较容易数不过来，所以写成<span style="color:#dd0055;">HEAD~100</span>。</p> 
<p>现在，我们要把当前版本“append GPL”回退到上一个版本“add distributed”，就可以使用<span style="color:#dd0055;">git reset</span>命令：</p> 
<pre><code class="hljs sql"><ol class="hljs-ln"><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="1"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span style="color:#444444;">$</span><span style="color:#33cc00;"><strong> git <span class="hljs-keyword">re</span></strong></span><span style="color:#33cc00;"><strong><span class="hljs-keyword">set</span> <span class="hljs-comment">--hard HEAD^</span></strong></span><span style="color:#444444;"></span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="2"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-keyword">HEAD</span> <strong><span class="hljs-keyword">is</span></strong><span style="color:#444444;"> <span class="hljs-keyword">now</span> </span><strong><span class="hljs-keyword">at</span></strong><span style="color:#444444;"> ea34578 </span><strong><span class="hljs-keyword">add</span></strong><span style="color:#444444;"> <span class="hljs-keyword">distributed</span></span></div></div></li></ol></code><div class="hljs-button signin" data-title="登录后复制" data-report-click="{&quot;spm&quot;:&quot;1001.2101.3001.4259&quot;}" onclick="hljs.signin(event)"></div></pre> 
<p>这时readme.txt的内容就成了版本<span style="color:#dd0055;">add distributed</span></p> 
<p>我们用<span style="color:#dd0055;">git log</span>再看看现在版本库的状态：</p> 
<pre class="has" name="code"><code class="language-html hljs xml"><ol class="hljs-ln"><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="1"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git log</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="2"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">commit ea34578d5496d7dd233c827ed32a8cd576c5ee85</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="3"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">Author: Michael Liao <span class="hljs-tag">&lt;<span class="hljs-name">askxuefeng@gmail.com</span>&gt;</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="4"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">Date:   Tue Aug 20 14:53:12 2013 +0800</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="5"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="6"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">    add distributed</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="7"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="8"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">commit cb926e7ea50ad11b8f9e909c05226233bf755030</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="9"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">Author: Michael Liao <span class="hljs-tag">&lt;<span class="hljs-name">askxuefeng@gmail.com</span>&gt;</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="10"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">Date:   Mon Aug 19 17:51:55 2013 +0800</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="11"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="12"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">    wrote a readme file</div></div></li></ol></code><div class="hljs-button signin" data-title="登录后复制" data-report-click="{&quot;spm&quot;:&quot;1001.2101.3001.4259&quot;}" onclick="hljs.signin(event)"></div></pre> 
<p>最新的那个版本<span style="color:#dd0055;">append GPL</span>已经看不到了！</p> 
<h2><a name="t19"></a><a name="t19"></a>恢复文件后，要是我们又想回到修改后的文件呢？（命令行窗口还没有被关掉）</h2> 
<p>{这个是git reset --hard后，又反悔了，想回到修改后的状态}</p> 
<p>只要上面的命令行窗口还没有被关掉，你就可以顺着往上找啊找啊，找到那个<span style="color:#dd0055;">append GPL</span>的<span style="color:#dd0055;">commit id</span>是<span style="color:#dd0055;">3628164...</span>，于是就可以指定回到未来的某个版本：</p> 
<pre class="has" name="code"><code class="language-html hljs xml"><ol class="hljs-ln"><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="1"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git reset --hard 3628164</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="2"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">HEAD is now at 3628164 append GPL</div></div></li></ol></code><div class="hljs-button signin" data-title="登录后复制" data-report-click="{&quot;spm&quot;:&quot;1001.2101.3001.4259&quot;}" onclick="hljs.signin(event)"></div></pre> 
<p>版本号没必要写全，前几位就可以了，Git会自动去找。</p> 
<p>Git的版本回退速度非常快，因为Git在内部有个指向当前版本的<span style="color:#dd0055;">HEAD</span>指针，当你回退版本的时候，Git仅仅是把HEAD从指向<span style="color:#dd0055;">append GPL</span>：</p> 
<p><img alt="git-head" class="has" src="https://img-blog.csdn.net/20150824103212235?watermark/2/text/aHR0cDovL2Jsb2cuY3Nkbi5uZXQv/font/5a6L5L2T/fontsize/400/fill/I0JBQkFCMA==/dissolve/70/gravity/Center" width="235" height="162"></p> 
<p>改为指向<span style="color:#dd0055;">add distributed</span>：</p> 
<p><img alt="git-head-move" class="has" src="https://img-blog.csdn.net/20150824103242645?watermark/2/text/aHR0cDovL2Jsb2cuY3Nkbi5uZXQv/font/5a6L5L2T/fontsize/400/fill/I0JBQkFCMA==/dissolve/70/gravity/Center" width="235" height="162"></p> 
<p>然后顺便把工作区的文件更新了。所以你让<span style="color:#dd0055;">HEAD</span>指向哪个版本号，你就把当前版本定位在哪。</p> 
<h2><a name="t20"></a><a name="t20"></a>恢复文件后，要是我们又想回到修改后的文件呢？（命令行窗口早就关掉了）</h2> 
<p>{这个是git reset --hard后，又反悔了，想回到修改后的状态}</p> 
<p>想恢复到新版本怎么办？找不到新版本的<span style="color:#dd0055;">commit id</span>怎么办？当你用<span style="color:#dd0055;">$ git reset --hard HEAD^</span>回退到<span style="color:#dd0055;">add distributed</span>版本时，再想恢复到<span style="color:#dd0055;">append GPL</span>，就必须找到<span style="color:#dd0055;">append GPL</span>的commit id。</p> 
<p>Git提供了一个命令<span style="color:#dd0055;">git reflog</span>用来记录你的每一次命令：[<a href="http://blog.csdn.net/pipisorry/article/details/50669350">Git高级教程</a>:git log与git reflog]</p> 
<pre class="has" name="code"><code class="language-html hljs xml"><ol class="hljs-ln"><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="1"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git reflog</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="2"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">ea34578 HEAD@{0}: reset: moving to HEAD^</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="3"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">3628164 HEAD@{1}: commit: append GPL</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="4"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">ea34578 HEAD@{2}: commit: add distributed</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="5"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">cb926e7 HEAD@{3}: commit (initial): wrote a readme file</div></div></li></ol></code><div class="hljs-button signin" data-title="登录后复制" data-report-click="{&quot;spm&quot;:&quot;1001.2101.3001.4259&quot;}" onclick="hljs.signin(event)"></div></pre> 
<p>第二行显示append GPL的commit id是3628164，现在，你又可以乘坐时光机回到未来了。</p> 
<p>&nbsp;</p> 
<p>&nbsp;</p>
                </div><div data-report-view="{&quot;mod&quot;:&quot;1585297308_001&quot;,&quot;dest&quot;:&quot;https://blog.csdn.net/WEB_CSDN_SHARE/article/details/79243308&quot;,&quot;extend1&quot;:&quot;pc&quot;,&quot;ab&quot;:&quot;new&quot;}"><div></div></div>
        </div>
    </article>

<!-- ************************************************** -->
<hr><hr>
<article class="baidu_pl">
        <div id="article_content" class="article_content clearfix">
        <link rel="stylesheet" href="https://csdnimg.cn/release/blogv2/dist/mdeditor/css/editerView/ck_htmledit_views-b5506197d8.css">
                <div id="content_views" class="htmledit_views">
                    <div class="outline-2" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="word-wrap:break-word"><span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px"><span class="section-number-2" style="word-wrap:break-word">1</span>&nbsp;Git简介</span></span></span></span>
</div> 
<div class="outline-2" style="word-wrap:break-word; line-height:26px">
 <span style="font-family:KaiTi_GB2312; font-size:18px"><span style="word-wrap:break-word"></span>&nbsp;</span>
</div> 
<div id="text-1" class="outline-text-2" style="word-wrap:break-word; line-height:26px"> 
 <p style="word-wrap:break-word; margin-top:5px; margin-bottom:5px; padding-top:0px; padding-bottom:0px"> <span style="font-family:KaiTi_GB2312; font-size:18px"><span style="word-wrap:break-word">Git是用C语言开发的分布版本控制系统。版本控制系统可以保留一个文件集合的历史记录，并能回滚到另外一个状态（历史记录状态）。</span><span style="word-wrap:break-word">对于任何一个文件,在 Git 内都只有三种状态:已提交(committed),已修改 (modified)和已暂存(staged)。已提交表示该文件已经被安全地保存在本地数据库中了;已修改表示修改了某个文件,但还没有提交保存;已暂存表示把已修改的文件放在下次提交时要保存的清单中。</span></span></p> 
 <p style="word-wrap:break-word; margin-top:5px; margin-bottom:5px; padding-top:0px; padding-bottom:0px"> <span style="font-family:KaiTi_GB2312; font-size:18px"><span style="word-wrap:break-word"></span>&nbsp;</span></p> 
</div> 
<div class="outline-2" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="word-wrap:break-word"><span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px"><span class="section-number-2" style="word-wrap:break-word">2</span>&nbsp;Git命令基本格式</span></span></span></span>
</div> 
<div class="outline-2" style="word-wrap:break-word; line-height:26px">
 <span style="font-family:KaiTi_GB2312; font-size:18px"><span style="word-wrap:break-word"></span>&nbsp;</span>
</div> 
<div id="text-2" class="outline-text-2" style="word-wrap:break-word; line-height:26px"> 
 <p style="word-wrap:break-word; margin-top:5px; margin-bottom:5px; padding-top:0px; padding-bottom:0px"> <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px">一般情况下，Git的命令都是git [command] [option] [argument]格式。其中 command指的是某种操作命令，比如config,mv,rm,pull,push等等。而option和 argument指的是操作命令后面的具体参数，比如：</span></span></p> 
 <span style="word-wrap:break-word"><span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000">git config --golobal user.name="hic"</span></span></span> 
 <p style="word-wrap:break-word; margin-top:5px; margin-bottom:5px; padding-top:0px; padding-bottom:0px"> <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px">其中，config指的就是配置命令,接着后面跟上配置的具体参数，其中–global指的是对全局配置生效，后面的user.name就是对用户名进行设置。</span></span></p> 
 <p style="word-wrap:break-word; margin-top:5px; margin-bottom:5px; padding-top:0px; padding-bottom:0px"> <span style="font-family:KaiTi_GB2312; font-size:18px"><span style="word-wrap:break-word"></span>&nbsp;</span></p> 
</div> 
<div class="outline-2" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="word-wrap:break-word"><span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px"><span class="section-number-2" style="word-wrap:break-word">3</span>&nbsp;配置文件</span></span></span></span>
</div> 
<div class="outline-2" style="word-wrap:break-word; line-height:26px">
 <span style="font-family:KaiTi_GB2312; font-size:18px"><span style="word-wrap:break-word"></span>&nbsp;</span>
</div> 
<p class="outline-text-2" style="word-wrap:break-word; margin-top:5px; margin-bottom:5px; padding-top:0px; padding-bottom:0px; line-height:26px"> <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px">配置文件是从事所有所有工作的基础，在这里配置文件决定了工作时候的用户，邮箱，以及默认编辑器等等常用的配置参数，下面就先说一说配置文件。</span></span></p> 
<p class="outline-text-2" style="word-wrap:break-word; margin-top:5px; margin-bottom:5px; padding-top:0px; padding-bottom:0px; line-height:26px"> <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px">在Git中，配置文件有三大类，分别放在不同的位置。</span></span></p> 
<div class="outline-text-2" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000">/etc/gitconfig</span></span></span>
</div> 
<div class="outline-text-2" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000"><br> </span></span></span>
</div> 
<div class="outline-text-2" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px">系统中所有用户都普遍适用的配置。git config –system就是用来配置这个文件的。</span></span>
</div> 
<div class="outline-text-2" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000">&nbsp;~/.gitconfig</span></span></span>
</div> 
<div class="outline-text-2" style="word-wrap:break-word; line-height:26px">
 <span style="font-family:KaiTi_GB2312; font-size:18px"><span style="word-wrap:break-word"></span>&nbsp;</span>
</div> 
<div class="outline-text-2" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px">用户目录下的配置文件，该文件只适用于该用户。git config –global就是用来配置这个文件的。</span></span>
</div> 
<div class="outline-text-2" style="word-wrap:break-word; line-height:26px">
 <span style="font-family:KaiTi_GB2312; font-size:18px"><span style="word-wrap:break-word"></span>&nbsp;</span>
</div> 
<div class="outline-text-2" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000">~/*/.git/config</span></span></span>
</div> 
<div class="outline-text-2" style="word-wrap:break-word; line-height:26px">
 <span style="font-family:KaiTi_GB2312; font-size:18px"><span style="word-wrap:break-word"></span>&nbsp;</span>
</div> 
<div class="outline-text-2" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px">这是当前项目的配置文件，仅对该项目适用。</span></span>
</div> 
<p class="outline-text-2" style="word-wrap:break-word; margin-top:5px; margin-bottom:5px; padding-top:0px; padding-bottom:0px; line-height:26px"> <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px">注意：每一级别的配置，都会覆盖上层的相同配置。</span></span></p> 
<p class="outline-text-2" style="word-wrap:break-word; margin-top:5px; margin-bottom:5px; padding-top:0px; padding-bottom:0px; line-height:26px"> <span style="font-family:KaiTi_GB2312; font-size:18px"><span style="word-wrap:break-word"></span>&nbsp;</span></p> 
<div class="outline-3" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px"><span class="section-number-3" style="word-wrap:break-word">3.1</span>&nbsp;配置信息</span></span></span>
</div> 
<p class="outline-text-3" style="word-wrap:break-word; margin-top:5px; margin-bottom:5px; padding-top:0px; padding-bottom:0px; line-height:26px"> <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px">用户名设置</span></span></p> 
<div class="outline-text-3" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000">git config --system user.name "hic"</span></span>
</div> 
<div class="outline-text-3" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000">git config --global user.name "hic" git config user.name "hic"</span></span></span>
</div> 
<p class="outline-text-3" style="word-wrap:break-word; margin-top:5px; margin-bottom:5px; padding-top:0px; padding-bottom:0px; line-height:26px"> <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px">电子邮件</span></span></p> 
<div class="outline-text-3" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000">git config --global user.email "hic@gmail.com"</span></span></span>
</div> 
<p class="outline-text-3" style="word-wrap:break-word; margin-top:5px; margin-bottom:5px; padding-top:0px; padding-bottom:0px; line-height:26px"> <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px">设置文本编辑器，默认为vi，这里设置为emacs</span></span></p> 
<div class="outline-text-3" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000">git config --global core.editor emacs</span></span></span>
</div> 
<p class="outline-text-3" style="word-wrap:break-word; margin-top:5px; margin-bottom:5px; padding-top:0px; padding-bottom:0px; line-height:26px"> <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px">查看配置信息</span></span></p> 
<div class="outline-text-3" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000">git config --list</span></span></span>
</div> 
<p class="outline-text-3" style="word-wrap:break-word; margin-top:5px; margin-bottom:5px; padding-top:0px; padding-bottom:0px; line-height:26px"> <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px">如果要查看某个特定的环境变量，只要把它的名字放到最后即可</span></span></p> 
<div class="outline-text-3" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000">git config user.name</span></span></span>
</div> 
<div class="outline-text-3" style="word-wrap:break-word; line-height:26px">
 <span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000"><span style="word-wrap:break-word"></span>&nbsp;</span>
</div> 
<div class="outline-text-3" style="word-wrap:break-word; line-height:26px">
 <span style="font-family:KaiTi_GB2312; font-size:18px"><span style="word-wrap:break-word"></span>&nbsp;</span>
</div> 
<div class="outline-2" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="word-wrap:break-word"><span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px"><span class="section-number-2" style="word-wrap:break-word">4</span>&nbsp;选择工作目录</span></span></span></span>
</div> 
<div class="outline-2" style="word-wrap:break-word; line-height:26px">
 <span style="font-family:KaiTi_GB2312; font-size:18px">选择一个工作目录，开始工作，同时我们添加一些文件和目录。</span>
</div> 
<div class="outline-text-2" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000">~$ mkdir test</span></span>
</div> 
<div class="outline-text-2" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000">~$ cd test/</span></span>
</div> 
<div class="outline-text-2" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000">~/test$ ls</span></span>
</div> 
<div class="outline-text-2" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000">~/test$ echo "Hello world! " &gt; README</span></span>
</div> 
<div class="outline-text-2" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000">~/test$ echo "This is a test! " &gt; file</span></span></span>
</div> 
<div class="outline-text-2" style="word-wrap:break-word; line-height:26px">
 <span style="font-family:KaiTi_GB2312; font-size:18px"><span style="word-wrap:break-word"></span>&nbsp;</span>
</div> 
<div class="outline-text-2" style="word-wrap:break-word; line-height:26px">
 <span style="font-family:KaiTi_GB2312; font-size:18px"><span style="word-wrap:break-word"></span>&nbsp;</span>
</div> 
<div class="outline-2" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="word-wrap:break-word"><span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px"><span class="section-number-2" style="word-wrap:break-word">5</span>&nbsp;初始化</span></span></span></span>
</div> 
<div class="outline-text-2" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000">~/test$ git init Initialized empty Git repository in /home/hic/test/.git/</span></span>
</div> 
<div class="outline-text-2" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000">~/test$ la file .git README</span></span></span>
</div> 
<p class="outline-text-2" style="word-wrap:break-word; margin-top:5px; margin-bottom:5px; padding-top:0px; padding-bottom:0px; line-height:26px"> <span style="font-family:KaiTi_GB2312; font-size:18px"><span style="word-wrap:break-word">执行这条命令之后，在test目录下会出</span><span style="word-wrap:break-word">现</span><span style="word-wrap:break-word">一个隐藏的.git目录，该目录会保存工程中所有的信息。</span></span></p> 
<p class="outline-text-2" style="word-wrap:break-word; margin-top:5px; margin-bottom:5px; padding-top:0px; padding-bottom:0px; line-height:26px"> <span style="font-family:KaiTi_GB2312; font-size:18px"><span style="word-wrap:break-word"></span>&nbsp;</span></p> 
<div class="outline-2" style="word-wrap:break-word; line-height:26px">
 <span style="font-family:KaiTi_GB2312; font-size:18px"><span style="word-wrap:break-word"><span style="word-wrap:break-word"><span style="word-wrap:break-word"><span class="section-number-2" style="word-wrap:break-word">6</span>&nbsp;Git中文件的三种</span></span></span><span style="word-wrap:break-word"><span style="word-wrap:break-word"><span style="word-wrap:break-word">状态</span></span></span></span>
</div> 
<div id="text-6" class="outline-text-2" style="word-wrap:break-word; line-height:26px"> 
 <p style="word-wrap:break-word; margin-top:5px; margin-bottom:5px; padding-top:0px; padding-bottom:0px"> <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px">在Git中，文件只有三种状态，<span style="color:#ff0000">已修改，已暂存和已提交</span>。这三个文件分别放在工作目录，暂存区域和git目录。当一个文件修改完毕之后，它仍然在工作目录；只有当它被add之后，才会进入暂存区域，文件状态变为已暂存；最后，当文件被 commit之后，它就会进去git目录区域。这三个文件状态非常重要，请慢慢理解。</span></span></p> 
 <p style="word-wrap:break-word; margin-top:5px; margin-bottom:5px; padding-top:0px; padding-bottom:0px"> <span style="font-family:KaiTi_GB2312; font-size:18px"><span style="word-wrap:break-word"></span>&nbsp;</span></p> 
</div> 
<div class="outline-2" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="word-wrap:break-word"><span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px"><span class="section-number-2" style="word-wrap:break-word">7</span>&nbsp;add命令暂存已修改文件</span></span></span></span>
</div> 
<div class="outline-2" style="word-wrap:break-word; line-height:26px">
 <span style="font-family:KaiTi_GB2312; font-size:18px"><span style="word-wrap:break-word"></span>&nbsp;</span>
</div> 
<p class="outline-text-2" style="word-wrap:break-word; margin-top:5px; margin-bottom:5px; padding-top:0px; padding-bottom:0px; line-height:26px"> <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px">接着上面的初始化。当初始化之后，在test目录下，有README，file和.git/三个文件或目录，其中.git/是在初始化之后生成的。</span></span></p> 
<p class="outline-text-2" style="word-wrap:break-word; margin-top:5px; margin-bottom:5px; padding-top:0px; padding-bottom:0px; line-height:26px"> <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px">此时在test中的文件都是存在于工作目录区域，尚未添加到暂存区。使用下面的命令可以查看到如果此时我要修改README文件。</span></span></p> 
<div class="outline-text-2" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000">~/test$ git status</span></span>
</div> 
<div class="outline-text-2" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000"><span style="word-wrap:break-word"># On branch master #</span><span style="word-wrap:break-word">&nbsp;</span></span></span>
</div> 
<div class="outline-text-2" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000"># Initial commit #</span></span>
</div> 
<div class="outline-text-2" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000"># Untracked files:</span></span>
</div> 
<div class="outline-text-2" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000"># (use "git add&nbsp;..." to include in what will be committed) #</span></span>
</div> 
<div class="outline-text-2" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000"># README</span></span>
</div> 
<div class="outline-text-2" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000"># file nothing added to commit but untracked files present (use "git add" to track)</span></span></span>
</div> 
<p class="outline-text-2" style="word-wrap:break-word; margin-top:5px; margin-bottom:5px; padding-top:0px; padding-bottom:0px; line-height:26px"> <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px">你会发现，README和file文件均是Untracked。接着使用add命令将它们添加到暂存区。</span></span></p> 
<div class="outline-text-2" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000">~/test$ git add .</span></span>
</div> 
<div class="outline-text-2" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000">~/test$ git status</span></span>
</div> 
<div class="outline-text-2" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000"># On branch master #</span></span>
</div> 
<div class="outline-text-2" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000"># Initial commit #</span></span>
</div> 
<div class="outline-text-2" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000"># Changes to be committed:</span></span>
</div> 
<div class="outline-text-2" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000"># (use "git rm --cached&nbsp;..." to unstage) #</span></span>
</div> 
<div class="outline-text-2" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000"># new file: README</span></span>
</div> 
<div class="outline-text-2" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000"># new file: file #</span></span></span>
</div> 
<p class="outline-text-2" style="word-wrap:break-word; margin-top:5px; margin-bottom:5px; padding-top:0px; padding-bottom:0px; line-height:26px"> <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px">此时的文件均已放在暂存区，其中git add . 就是将本目录下所有文件暂存。</span></span></p> 
<p class="outline-text-2" style="word-wrap:break-word; margin-top:5px; margin-bottom:5px; padding-top:0px; padding-bottom:0px; line-height:26px"> <span style="font-family:KaiTi_GB2312; font-size:18px"><span style="word-wrap:break-word"></span>&nbsp;</span></p> 
<div class="outline-2" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="word-wrap:break-word"><span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px"><span class="section-number-2" style="word-wrap:break-word">8</span>&nbsp;commit命令提交已暂存文件</span></span></span></span>
</div> 
<div class="outline-2" style="word-wrap:break-word; line-height:26px">
 <span style="font-family:KaiTi_GB2312; font-size:18px"><span style="word-wrap:break-word"></span>&nbsp;</span>
</div> 
<p class="outline-text-2" style="word-wrap:break-word; margin-top:5px; margin-bottom:5px; padding-top:0px; padding-bottom:0px; line-height:26px"> <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px">暂存区其实更像是一个缓冲区域，只有将文件commit到git目录区域才表示真正的提交。其中commit命令提交的时候，需要对提交内容进行说明，有两种方法，一种是使用 -m "Message" 指令，这适用与比较短小的信息；另外一种就是使用编辑器进行编辑，前面设定的编辑器就是为它服务的，默认编辑器是vi，不过我这里设定的是emacs。</span></span></p> 
<p class="outline-text-2" style="word-wrap:break-word; margin-top:5px; margin-bottom:5px; padding-top:0px; padding-bottom:0px; line-height:26px"> <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px">在这里，我使用-m参数。其中-a选项，表示提交所有在暂存区的文件，当然你也可以使用 git commit file README这样的方式来提交。</span></span></p> 
<div class="outline-text-2" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000">~/test$ git commit -a -m "hahah"</span></span>
</div> 
<div class="outline-text-2" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000">[master (root-commit) 81fde76] hahah 2 files changed, 3 insertions(+) create mode 100644 README create mode 100644 file</span></span></span>
</div> 
<p class="outline-text-2" style="word-wrap:break-word; margin-top:5px; margin-bottom:5px; padding-top:0px; padding-bottom:0px; line-height:26px"> <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px">这是再查看文件状态，就会发现没有可以提交的文件了。</span></span></p> 
<div class="outline-text-2" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000">~/test$ git status</span></span>
</div> 
<div class="outline-text-2" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000"># On branch master nothing to commit (working directory clean)</span></span></span>
</div> 
<div class="outline-text-2" style="word-wrap:break-word; line-height:26px">
 <span style="font-family:KaiTi_GB2312; font-size:18px"><span style="word-wrap:break-word"></span>&nbsp;</span>
</div> 
<div class="outline-text-2" style="word-wrap:break-word; line-height:26px">
 <span style="font-family:KaiTi_GB2312; font-size:18px">&nbsp;</span>
</div> 
<div class="outline-2" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="word-wrap:break-word"><span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px"><span class="section-number-2" style="word-wrap:break-word">9</span>&nbsp;分支</span></span></span></span>
</div> 
<div class="outline-2" style="word-wrap:break-word; line-height:26px">
 <span style="font-family:KaiTi_GB2312; font-size:18px"><span style="word-wrap:break-word"></span>&nbsp;</span>
</div> 
<p class="outline-text-2" style="word-wrap:break-word; margin-top:5px; margin-bottom:5px; padding-top:0px; padding-bottom:0px; line-height:26px"> <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px">如果事先没有作出任何的更改，一个项目是没有分支的，它只有一条主线，例如：</span></span></p> 
<div class="outline-text-2" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000">~/test$ git branch * master</span></span></span>
</div> 
<p class="outline-text-2" style="word-wrap:break-word; margin-top:5px; margin-bottom:5px; padding-top:0px; padding-bottom:0px; line-height:26px"> <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px">这里master就是主干，就是整个开发的流程，它前面的星号表示当前开发的流程。</span></span></p> 
<p class="outline-text-2" style="word-wrap:break-word; margin-top:5px; margin-bottom:5px; padding-top:0px; padding-bottom:0px; line-height:26px"> <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px">如果在开发过程中，我们突然需要添加某个功能，或者打上某个补丁，可以在 master主干上添加一个分支，比如host，例如:</span></span></p> 
<div class="outline-text-2" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000">~/test$ git checkout -b host</span></span>
</div> 
<div class="outline-text-2" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000">Switched to a new branch 'host'</span></span>
</div> 
<div class="outline-text-2" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000">~/test$ git branch</span></span>
</div> 
<div class="outline-text-2" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000">* host master</span></span></span>
</div> 
<p class="outline-text-2" style="word-wrap:break-word; margin-top:5px; margin-bottom:5px; padding-top:0px; padding-bottom:0px; line-height:26px"> <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px">这个时候，你可以清楚的看到星号已经在host头上，表示当前已经切换到host上，你可以开发你的补丁，而不会打乱主干的开发。</span></span></p> 
<p class="outline-text-2" style="word-wrap:break-word; margin-top:5px; margin-bottom:5px; padding-top:0px; padding-bottom:0px; line-height:26px"> <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px">如果你在开发过程中想要回到主干，可以使用checkout命令进行切换。</span></span></p> 
<div class="outline-text-2" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000">~/test$ git checkout master</span></span>
</div> 
<div class="outline-text-2" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000">Switched to branch 'master'</span></span></span>
</div> 
<p class="outline-text-2" style="word-wrap:break-word; margin-top:5px; margin-bottom:5px; padding-top:0px; padding-bottom:0px; line-height:26px"> <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px">此时，你又回到主干了。</span></span></p> 
<p class="outline-text-2" style="word-wrap:break-word; margin-top:5px; margin-bottom:5px; padding-top:0px; padding-bottom:0px; line-height:26px"> <span style="font-family:KaiTi_GB2312; font-size:18px"><span style="word-wrap:break-word"></span>&nbsp;</span></p> 
<div class="outline-2" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="word-wrap:break-word"><span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px"><span class="section-number-2" style="word-wrap:break-word">10</span>&nbsp;合并</span></span></span></span>
</div> 
<div class="outline-2" style="word-wrap:break-word; line-height:26px">
 <span style="font-family:KaiTi_GB2312; font-size:18px"><span style="word-wrap:break-word"></span>&nbsp;</span>
</div> 
<p class="outline-text-2" style="word-wrap:break-word; margin-top:5px; margin-bottom:5px; padding-top:0px; padding-bottom:0px; line-height:26px"> <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px">当某个分支的开发结束后，你会需要将其合并到主干上，从而集中精力进行主干的开发。合并前只需要将指针切换到主干，即master，然后使用merge命令。</span></span></p> 
<div class="outline-text-2" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000">~/test$ git checkout host Switched to branch 'host'</span></span>
</div> 
<div class="outline-text-2" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000">~/test$ echo "lsdknl" &gt;&gt; file</span></span>
</div> 
<div class="outline-text-2" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000">~/test$ git add file</span></span>
</div> 
<div class="outline-text-2" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000">~/test$ git commit file -m "add somthing"</span></span>
</div> 
<div class="outline-text-2" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000">[host 0dacfd9] add somthing 1 file changed, 1 insertion(+)</span></span>
</div> 
<div class="outline-text-2" style="word-wrap:break-word; line-height:26px">
 <span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000"><span style="word-wrap:break-word"></span>&nbsp;</span>
</div> 
<div class="outline-text-2" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000">~/test$ git checkout master Switched to branch 'master'</span></span>
</div> 
<div class="outline-text-2" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000">~/test$ git merge host Updating 81fde76..0dacfd9 Fast-forward file | 1 + 1 file changed, 1 insertion(+)</span></span>
</div> 
<p class="outline-text-2" style="word-wrap:break-word; margin-top:5px; margin-bottom:5px; padding-top:0px; padding-bottom:0px; line-height:26px"> <span style="word-wrap:break-word"><span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px">此时的host分支已经失去作用了，可以将删除。</span></span></span></p> 
<div class="outline-text-2" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000">~/test$ git branch -d host Deleted branch host (was 0dacfd9).</span></span></span>
</div> 
<div class="outline-text-2" style="word-wrap:break-word; line-height:26px">
 <span style="font-family:KaiTi_GB2312; font-size:18px"><span style="word-wrap:break-word"></span>&nbsp;</span>
</div> 
<div class="outline-text-2" style="word-wrap:break-word; line-height:26px">
 <span style="font-family:KaiTi_GB2312; font-size:18px"><span style="word-wrap:break-word"></span>&nbsp;</span>
</div> 
<div class="outline-text-2" style="word-wrap:break-word; line-height:26px">
 <span style="font-family:KaiTi_GB2312; font-size:18px"><span style="word-wrap:break-word"></span>&nbsp;</span>
</div> 
<div class="outline-2" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="word-wrap:break-word"><span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px"><span class="section-number-2" style="word-wrap:break-word">11</span>&nbsp;远程库操作</span></span></span></span>
</div> 
<div id="text-11" class="outline-text-2" style="word-wrap:break-word; line-height:26px"> 
</div> 
<div class="outline-3" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px"><span class="section-number-3" style="word-wrap:break-word">11.1</span>&nbsp;查看当前远程库</span></span></span>
</div> 
<div id="text-11.1" class="outline-text-3" style="word-wrap:break-word; line-height:26px"> 
 <span style="word-wrap:break-word"><span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000">git remote</span></span></span>
</div> 
<div id="text-11.1" class="outline-text-3" style="word-wrap:break-word; line-height:26px"> 
 <span style="word-wrap:break-word"><span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px"><br> </span></span></span>
</div> 
<div class="outline-3" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px"><span class="section-number-3" style="word-wrap:break-word">11.2</span>&nbsp;添加远程库</span></span></span>
</div> 
<div id="text-11.2" class="outline-text-3" style="word-wrap:break-word; line-height:26px"> 
 <span style="word-wrap:break-word"><span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000">git remote add emacs git://github.com/lishuo/emacs</span></span></span>
</div> 
<div class="outline-text-3" style="word-wrap:break-word; line-height:26px">
 <span style="font-family:KaiTi_GB2312; font-size:18px"><span style="word-wrap:break-word"></span>&nbsp;</span>
</div> 
<div class="outline-3" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px"><span class="section-number-3" style="word-wrap:break-word">11.3</span>&nbsp;从远程库抓取数据</span></span></span>
</div> 
<div id="text-11.3" class="outline-text-3" style="word-wrap:break-word; line-height:26px"> 
 <span style="word-wrap:break-word"><span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000">git fetch [remote-name]</span></span></span>
</div> 
<div class="outline-text-3" style="word-wrap:break-word; line-height:26px">
 <span style="font-family:KaiTi_GB2312; font-size:18px"><span style="word-wrap:break-word"></span>&nbsp;</span>
 <span style="font-family:KaiTi_GB2312; font-size:18px">&nbsp;</span>
</div> 
<div class="outline-3" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px"><span class="section-number-3" style="word-wrap:break-word">11.4</span>&nbsp;推送数据到远程仓库</span></span></span>
</div> 
<div id="text-11.4" class="outline-text-3" style="word-wrap:break-word; line-height:26px"> 
 <span style="word-wrap:break-word"><span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000">git push [remote-name] [branch-name]</span></span></span>
</div> 
<div class="outline-text-3" style="word-wrap:break-word; line-height:26px">
 <br> 
</div> 
<div class="outline-3" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px"><span class="section-number-3" style="word-wrap:break-word">11.5</span>&nbsp;查看远程仓库</span></span></span>
</div> 
<div id="text-11.5" class="outline-text-3" style="word-wrap:break-word; line-height:26px"> 
 <span style="word-wrap:break-word"><span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000">git remote [remote-name]</span></span></span>
</div> 
<div class="outline-text-3" style="word-wrap:break-word; line-height:26px">
 <span style="font-family:KaiTi_GB2312; font-size:18px">&nbsp;</span>
</div> 
<div class="outline-text-3" style="word-wrap:break-word; line-height:26px">
 <span style="font-family:KaiTi_GB2312; font-size:18px"><span style="word-wrap:break-word"></span>&nbsp;</span>
</div> 
<div class="outline-3" style="word-wrap:break-word; line-height:26px">
 <span style="word-wrap:break-word"><span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px"><span class="section-number-3" style="word-wrap:break-word">11.6</span>&nbsp;远程仓库的删除和重命名</span></span></span>
</div> 
<div id="text-11.6" class="outline-text-3" style="word-wrap:break-word; line-height:26px"> 
 <span style="word-wrap:break-word"><span style="font-family:KaiTi_GB2312; font-size:18px; color:#ff0000">git remote rm [remote-name] git remotw rename form-name to-name</span></span>
</div>
                </div><div><div></div></div>
        </div>
    </article>

<!-- ************************************************** -->
<hr><hr>

<article class="baidu_pl">
        <div id="article_content" class="article_content clearfix">
        <link rel="stylesheet" href="https://csdnimg.cn/release/blogv2/dist/mdeditor/css/editerView/ck_htmledit_views-b5506197d8.css">
                <div id="content_views" class="markdown_views prism-atom-one-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                        <path stroke-linecap="round" d="M5,0 0,2.5 5,5z" id="raphael-marker-block" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                    </svg>
                    <p></p>
<div class="toc">
 <h3><a name="t0"></a><a name="t0"></a>Git</h3>
 <ul><li><a href="#Git_1" target="_self">Git概念</a></li><li><ul><li><a href="#Git_9" target="_self">Git的下载安装</a></li><li><a href="#Git_21" target="_self">Git常用命令</a></li></ul>
 </li></ul>
</div>
<p></p> 
<h1><a name="t1"></a><a name="t1"></a><a id="Git_1"></a>Git概念</h1> 
<p>Git是目前世界上最先进的分布式版本控制系统。</p> 
<p>谈到Git就不得不说SVN了，SVN与Git的最主要的区别？</p> 
<p>1、SVN是集中式版本控制系统，版本库是集中放在中央服务器的，而干活的时候，用的都是自己的电脑，所以首先要从中央服务器哪里得到最新的版本，然后干活，干完后，需要把自己做完的活推送到中央服务器。集中式版本控制系统是必须联网才能工作，如果在局域网还可以，带宽够大，速度够快，如果在互联网下，如果网速慢的话，就纳闷了。</p> 
<p>2、Git是分布式版本控制系统，那么它就没有中央服务器的，每个人的电脑就是一个完整的版本库，这样，工作的时候就不需要联网了，因为版本都是在自己的电脑上。既然每个人的电脑都有一个完整的版本库，那多个人如何协作呢？比如说自己在电脑上改了文件A，其他人也在电脑上改了文件A，这时，你们两之间只需把各自的修改推送给对方，就可以互相看到对方的修改了。</p> 
<h2><a name="t2"></a><a name="t2"></a><a id="Git_9"></a>Git的下载安装</h2> 
<p>在linux系统下，可以直接在命令窗口安装和使用git。<br> 对于windows我们就需要先下载在进行安装<br> 1、下载地址：https://www.git-scm.com/download<br> 2、下载完以后双击进行安装<br> <img src="https://img-blog.csdnimg.cn/20210209152228471.png?x-oss-process=image/watermark,type_ZmFuZ3poZW5naGVpdGk,shadow_10,text_aHR0cHM6Ly9ibG9nLmNzZG4ubmV0L3dlaXhpbl80NTY3MjE3OA==,size_16,color_FFFFFF,t_70" alt="在这里插入图片描述"><br> 3、接下来一直点击Next即可<br> 4、最终安装完成以后鼠标单击右键出现以下图示就代表安装成功了<br> <img src="https://img-blog.csdnimg.cn/20210209152419416.png" alt="在这里插入图片描述"><br> 5、Git GUI ：图形界面工具<br> Git Bash：命令行工具</p> 
<h2><a name="t3"></a><a name="t3"></a><a id="Git_21"></a>Git常用命令</h2> 
<p>在实际项目开发中，一个完整的项目并不是我们个人可以完成的，此时就可以借助git来实现多人协作完成，我一般使用的命令行</p> 
<p>1、创建好文件夹</p> 
<pre class="prettyprint"><code class="prism language-c has-numbering" onclick="mdcp.signin(event)" style="position: unset;">创建仓库：mkdir resporitory
在仓库下创建工作目录：mkdir repol
在工作目录下创建<span class="token punctuation">.</span>git文件：git init  （这个必须创建，是一个隐藏文件）
把项目放到工作目录下，和<span class="token punctuation">.</span>git同级目录
<div class="hljs-button signin" data-title="登录后复制" data-report-click="{&quot;spm&quot;:&quot;1001.2101.3001.4259&quot;}"></div></code><ul class="pre-numbering" style=""><li style="color: rgb(153, 153, 153);">1</li><li style="color: rgb(153, 153, 153);">2</li><li style="color: rgb(153, 153, 153);">3</li><li style="color: rgb(153, 153, 153);">4</li></ul></pre> 
<p>2、本地仓库操作命令</p> 
<pre class="prettyprint"><code class="prism language-c has-numbering" onclick="mdcp.signin(event)" style="position: unset;">查看当前状态：git status
添加文件到缓冲区：git add 文件名
提交到版本库：git commit <span class="token operator">-</span>m <span class="token string">"提交注释"</span>
版本回退：（<span class="token number">1</span>）先查看版本，确定要回到的时刻：git log
        （<span class="token number">2</span>）git reset <span class="token operator">--</span>hard 提交编号
        （<span class="token number">3</span>）回退后想要回到之前的版本：
                    查看之前的记录，找到新版本的提交编号 git reflog
                    git reset <span class="token operator">--</span>hard 提交编号
<div class="hljs-button signin" data-title="登录后复制" data-report-click="{&quot;spm&quot;:&quot;1001.2101.3001.4259&quot;}"></div></code><ul class="pre-numbering" style=""><li style="color: rgb(153, 153, 153);">1</li><li style="color: rgb(153, 153, 153);">2</li><li style="color: rgb(153, 153, 153);">3</li><li style="color: rgb(153, 153, 153);">4</li><li style="color: rgb(153, 153, 153);">5</li><li style="color: rgb(153, 153, 153);">6</li><li style="color: rgb(153, 153, 153);">7</li><li style="color: rgb(153, 153, 153);">8</li></ul></pre> 
<p>3、远程仓库</p> 
<pre class="prettyprint"><code class="prism language-c has-numbering" onclick="mdcp.signin(event)" style="position: unset;">在github创建好仓库，并在本地创建好和github上面同名的仓库，基于https协议
使用clone指令克隆线上仓库到本地<span class="token operator">--</span><span class="token operator">&gt;</span>  git clone 线上仓库地址
在仓库上做对应的操作（提交暂存区、提交本地仓库、提交线上仓库、拉取线上仓库<span class="token punctuation">)</span>
提交暂存区：git add 文件名
提交本地仓库：git commit <span class="token operator">-</span>m <span class="token string">"注释"</span>
提交线上仓库：git push
拉取线上仓库：git pull 远程仓库地址
<div class="hljs-button signin" data-title="登录后复制" data-report-click="{&quot;spm&quot;:&quot;1001.2101.3001.4259&quot;}"></div></code><ul class="pre-numbering" style=""><li style="color: rgb(153, 153, 153);">1</li><li style="color: rgb(153, 153, 153);">2</li><li style="color: rgb(153, 153, 153);">3</li><li style="color: rgb(153, 153, 153);">4</li><li style="color: rgb(153, 153, 153);">5</li><li style="color: rgb(153, 153, 153);">6</li><li style="color: rgb(153, 153, 153);">7</li></ul></pre> 
<p>4、分支管理<br> （1）在版本回退里，每次提交后都会有记录，Git把它们串成时间线，形成类似于时间轴的东西，这个时间轴就是一个分支，我们称之为master分支。<br> （2）在开发的时候往往是团队协作，多人进行开发，因此光有一个分支是无法满足多人同时开发的需求的，并且在分支上工作并不影响其他分支的正常使用，会更加安全，Git鼓励开发者使用分支去完成一些开发任务。</p> 
<pre class="prettyprint"><code class="prism language-c has-numbering" onclick="mdcp.signin(event)" style="position: unset;">分支相关指令：
查看分支：git branch
创建分支：git branch 分支名
切换分支：git checkout 分支名 
删除分支：git branch <span class="token operator">-</span>d 分支名
合并分支：git merge 被合并的分支名
注意：在删除分支的时候，一定要先退出要删除的分支，然后才能删除。
合并所有分支之后，需要将master分支提交线上远程仓库中：
<div class="hljs-button signin" data-title="登录后复制" data-report-click="{&quot;spm&quot;:&quot;1001.2101.3001.4259&quot;}"></div></code><ul class="pre-numbering" style=""><li style="color: rgb(153, 153, 153);">1</li><li style="color: rgb(153, 153, 153);">2</li><li style="color: rgb(153, 153, 153);">3</li><li style="color: rgb(153, 153, 153);">4</li><li style="color: rgb(153, 153, 153);">5</li><li style="color: rgb(153, 153, 153);">6</li><li style="color: rgb(153, 153, 153);">7</li><li style="color: rgb(153, 153, 153);">8</li></ul></pre> 
<p>总结：我目前在工作当中没有用到过版本回退，一般常用的就是<br> git add * ：提交所有代码到暂存区（为了方便）<br> git commit -m “注释”：上传代码到本地仓库<br> git push ：上传代码到远程仓库<br> git pull 远程仓库地址：从远程仓库拉取代码下来<br> 分支也会常用，但是在git push之前需要合并到master</p>
                </div><div><div></div></div>
                <link href="https://csdnimg.cn/release/blogv2/dist/mdeditor/css/editerView/markdown_views-d7a94ec6ab.css" rel="stylesheet">
                <link href="https://csdnimg.cn/release/blogv2/dist/mdeditor/css/style-80ad9b4f5b.css" rel="stylesheet">
        </div>
    </article>

<!-- ************************************************************** -->
<hr><hr>

<!---->
<!-- ************************************************************** -->
<hr><hr>
<article class="baidu_pl">
        <div id="article_content" class="article_content clearfix">
        <link rel="stylesheet" href="https://csdnimg.cn/release/blogv2/dist/mdeditor/css/editerView/ck_htmledit_views-b5506197d8.css">
                <div id="content_views" class="htmledit_views">
                    <p>http://<a href="http://blog.csdn.net/pipisorry/article/details/44588351">blog.csdn.net/pipisorry/article/details/44588351</a></p> 
<h2><a name="t0"></a><a name="t0"></a>本地库创建总结</h2> 
<p>全局设置：<span style="color:#33cc00;"><code>$ git config --global user.name "<span style="color:#cccccc;">***</span>"</code></span></p> 
<p><span style="color:#33cc00;"><code>$ git config --global user.email "<span style="color:#cccccc;">***@1</span><span style="color:#cccccc;">26.com</span>"</code></span></p> 
<p>在本地的某个要使用git版本控制的目录下<br><span style="color:#33cc00;">git init<br> 添加exclude<br> git add .<br> git commit -m "first commit"</span></p> 
<p>[<a href="http://geek.csdn.net/news/detail/195294">pygit：500行Python代码实现的Git客户端</a>]</p> 
<h1><a name="t1"></a><a name="t1"></a><span style="color:#ff0000;">Git的安装</span></h1> 
<h3><a name="t2"></a><a name="t2"></a>linux下安装git</h3> 
<p>ubuntu 14.04中安装最新版git</p> 
<p>$sudo add-apt-repository ppa:git-core/ppa &nbsp; &nbsp; &nbsp; &nbsp;#添加最新源，不然总是安装git 1.9.1</p> 
<p>$sudo apt-get update &nbsp; &nbsp;#添加更新源后记得update一下，否则添加后也没用</p> 
<p>$sudo apt-get install git &nbsp; &nbsp;#安装最新版的git</p> 
<h3><a name="t3"></a><a name="t3"></a>windows下安装git</h3> 
<p>Windows下要使用很多Linux/Unix的工具时，需要Cygwin这样的模拟环境，Git也一样。Cygwin的安装和配置都比较复杂，就不建议你折腾了。不过，有高人已经把模拟环境和Git都打包好了，名叫msysgit，只需要下载一个单独的exe安装程序。</p> 
<p>msysgit是Windows版的Git，从<a href="http://msysgit.github.io/">http://msysgit.github.io/</a>下载，然后按默认选项安装即可。</p> 
<p>安装完成后，在开始菜单里找到“Git”-&gt;“Git Bash”！</p> 
<p>Note: windows下安装git后，如果将安装目录D:\Git\bin加入到path路径中，这样就可以在cmd（而不是git命令行mingw32）中使用linux命令如ls了。</p> 
<p>快速启动Git并自动切换到指定的文文件夹：命令行工具<strong>Git Bash</strong>还集成到了Windows的资源管理器中，在文件夹上右键，可以点击<strong>Git Bash Here</strong>和<strong>Git GUI Here</strong>快速启动Git并自动切换到指定的文件夹。</p> 
<h2><a name="t4"></a><a name="t4"></a>设置git的user name和email</h2> 
<h3><a name="t5"></a><a name="t5"></a>配置命令</h3> 
<p><strong><span style="color:#33cc00;"><code>$ git config --global user.name "<span style="color:#cccccc;">***</span>"</code></span></strong></p> 
<p><strong><code><span style="color:#33cc00;">$ git config --global user.email "</span><span style="color:#cccccc;">***@1</span><span style="color:#cccccc;">26.com</span><span style="color:#33cc00;">"</span></code></strong></p> 
<p>因为Git是分布式版本控制系统，所以，每个机器都必须自报家门：你的名字和Email地址。（注册过的）</p> 
<p>注意<code>git config</code>命令的<code>--global</code>参数，用了这个参数，表示你<strong>这台机器上所有的Git仓库都会使用这个配置</strong>，当然也可以对某个仓库指定不同的用户名和Email地址。</p> 
<h3><a name="t6"></a><a name="t6"></a>查看git配置</h3> 
<p>git config --list</p> 
<p><a href="http://blog.csdn.net/pipisorry">皮皮Blog</a></p> 
<p>&nbsp;</p> 
<h1><a name="t7"></a><a name="t7"></a><span style="color:#ff0000;">创建版本库-初始化git代码库</span></h1> 
<p>通过<code>git init</code>命令把某个目录（比如我的是E:\mine\pythonworkspace）变成Git可以管理的仓库</p> 
<p>GitBash中输入：</p> 
<p><span style="color:#33cc00;"><strong>$ cd 'E:\mine\pythonworkspace'</strong></span></p> 
<p><span style="color:#33cc00;"><strong>$ git init</strong></span></p> 
<p>当前目录下多了一个<code>.git</code>的目录，这个目录是Git来跟踪管理版本库的</p> 
<p>Note:git很干净:git不会像svn一样在每个目录下面都建立一个.svn目录，而只是在代码根目录下建立一个.git目录。所以相应的，当你执行git status的时候，显示出来的是整个工程的代码修改，而不是像svn一样显示当前目录下的修改。git只建立一个.git目录的好处是，除了根目录下你需要注意这里比原先多了一个文件夹外，你可以很放心地认为“代码就像它看起来的那样”，你把它copy到任意一个地方都可以。而svn则不行，svn的代码目录是不能够拷贝到其他svn代码库中的，因为svn的索引会冲突。</p> 
<h2><a name="t8"></a><a name="t8"></a>忽略指定文件</h2> 
<p>git提交代码文件时怎么过滤掉某个文件夹,不提交Git工作目录中某些文件。在git add文件之前，有些文件（比如数据文件，&gt;100m就不能push到远程；比如.pyc文件；比如编译过程中生成的 .o 文件）是我们并不想加入也无需被添加到 Git 管理中，同时也不希望他出现在未跟踪列表中。</p> 
<h3><a name="t9"></a><a name="t9"></a>.gitignore 文件</h3> 
<p>lz提示一点，相当重要：<span style="color:#ff0000;">.gitignore 文件只能作用于 Untracked Files</span>，也就是那些从来没有被 Git 记录过的文件（自添加以后，从未 add 及 commit 过的文件）。.gitignore文件只是ignore没有被staged(cached)文件，对于已经被staged文件，加入ignore文件时一定要先从staged移除。</p> 
<p><strong>配置语法</strong><br> 1)以“/”开头表示目录；<br> 2)以“?”通配单个字符<br> 3)以“*”通配多个字符；<br> 4)以方括号“[]”包含单个字符的匹配列表；<br> 5)以叹号“!”跟踪某个文件或目录；指出例外的情况，不忽略，如!main.pyc。</p> 
<div id="sina_keyword_ad_area2">
 <strong>1. 全局设置</strong>
 <br> &nbsp;&nbsp;&nbsp;&nbsp;通过修改全局配置 gitconfig 中的&nbsp;
 <code>excludesfile 指定全局忽略文件。</code>设置方法：
 <br> $ git config --global core.excludesfile ~/.gitignore
 <br> &nbsp;&nbsp;&nbsp;&nbsp;修改~/.gitignore 这个文件将作用于所有 git 项目，并且作用于项目实例中的所有被跟踪的目录。比如说我们可以在该文件中添加*.o 来忽略所有 .o 文件。
 <br>
 <strong>2. 局部设置</strong> 
 <p>只作用于当前目录（也就是.git目录的父目录）下，在 .gitignore 文件中添加 *.o 会忽略所有目录下产生的.o 文件，但在当前目录下的 .gitignore 中添加 *.o 却只能忽略当前目录下的 .o 文件。</p> 
 <p>Note:屏蔽某个目录下的某个文件，指定忽略路径时，路径是没有相对路径的，git管理下的所有文件都会进行搜索。</p> 
 <h3><a name="t10"></a><a name="t10"></a>.git/info/exclude</h3> 
 <p>&nbsp;git 还提供了另一种 exclude 的方式来做同样的事情，不同的是 .gitignore 这个文件本身会提交到版本库中去。用来保存的是公共的需要排除的文件。而 <span style="color:#ff0000;">.git/info/exclude 这里设置的则是你自己本地需要排除的文件, 他不会影响到其他人</span>。也不会提交到版本库中去。工程目录下找到.git/info/exclude，把要排除的文件写进去。</p> 
 <h3><a name="t11"></a><a name="t11"></a>.gitignore文件</h3> 
 <p>在Git工作区的根目录下创建一个特殊的.gitignore文件，然后把要忽略的文件名填进去，Git就会自动忽略这些文件。</p> 
 <p>Note: 如果使用Windows，windows下貌似不能创建.gitignore这个文件，如果你在资源管理器里新建一个.gitignore文件，提示你必须输入文件名，但是在文本编辑器里“保存”或者“另存为”就可以把文件保存为.gitignore了。lz发现还可以这样做：打开git，cd到.git文件夹下，输入命令touch .gitignore就可以创建成功了。</p> 
 <h3><a name="t12"></a><a name="t12"></a>.gitignore（或者.git/info/exclude）示例</h3> 
 <p>不需要从头写.gitignore文件，GitHub已经为我们准备了各种配置文件，只需要组合一下就可以使用了。所有配置文件可以直接在线浏览：<a href="https://github.com/github/gitignore">https://github.com/github/gitignore</a>.</p> 
 <p>[<a href="https://github.com/pipilove/python_workspace/edit/master/.gitignore">https://github.com/pipilove/python_workspace/edit/master/.gitignore</a>]</p> 
 <p>[<a href="https://help.github.com/articles/ignoring-files/">Ignoring files</a>]</p> 
 <p>[<a href="http://blog.sina.com.cn/s/blog_81fe9f94010182uz.html">git 创建 .gitignore 文件过滤规则及注意事项</a>]</p> 
 <p>[<a href="http://blog.csdn.net/hustpzb/article/details/8649545">Git 过滤文件，控制上传</a>]</p> 
</div> 
<p>[<a href="http://blog.sina.com.cn/s/blog_601f224a01012a9r.html">git-忽略指定文件</a>]</p> 
<h2><a name="t13"></a><a name="t13"></a><strong><span style="color:#ff0000;">把文件添加到仓库</span></strong></h2> 
<p>1. $ git add readme.txt</p> 
<p><code>$<span style="color:#33cc00;">git add --all .</span>&nbsp;&nbsp; #同时包含git add .和git rm 所有已经删除的文件</code></p> 
<p><strong>Note:</strong></p> 
<p>1. 如果不add到暂存区，那就不会加入到commit中。</p> 
<p>2.workspace中某个文件夹右键 &gt;&nbsp; git add all files now</p> 
<h3><a name="t14"></a><a name="t14"></a>将文件从仓库删除unstage</h3> 
<p>也就是将某个文件回到git add之前状态，相当于没有git add。</p> 
<p>use "git rm --cached &lt;file&gt;..." to unstage</p> 
<p>刚add的所有文件都unstage: git rm --cached -r .</p> 
<p>这样就可以将不想commit的文件加入ignore中再git add。</p> 
<h3><a name="t15"></a><a name="t15"></a><span style="color:#ff0000;">删除文件</span></h3> 
<p>如果是你删除了某个文件如1.txt，怎么才能提交这种修改：</p> 
<p>方法1.现在的git2.0版本使用git add 1.txt不行，可以用git rm 1.txt 将删除动作提交到stage中。直接使用git add 1.txt会提示错误：Changes not staged for commit: (use "git add/rm &lt;file&gt;..." to update what will be committed) (use "git checkout -- &lt;file&gt;..." to discard changes in working directory) deletee: 1.txt。从提示中看出del操作没有被staged。关于stage参考下面的[工作区和暂存区]部分。当然也可以直接用git add --all .啦。</p> 
<p>方法2. 直接删除一个文件，但是之后要用git commit -a -m 'update'来提交，才能提交删除的文件到远程和本地库中，与git1.0不同。（现在好像也不用加-a了）</p> 
<p>其它删除文件相关的内容[<a href="http://blog.csdn.net/pipisorry/article/details/47867097">Git版本控制教程 - Git查阅、撤销修改和版本回退</a>:git删除和恢复删除的文件]</p> 
<h3><a name="t16"></a><a name="t16"></a>git status命令查看结果</h3> 
<p><code>绿色是已经add到暂存区stage中的（右键add进去的）， 红色是在工作区workspace还没add到stage中的</code></p> 
<h3><a name="t17"></a><a name="t17"></a>git diff</h3> 
<p>查看difference</p> 
<p>[<a href="https://youzipi.blog.csdn.net/article/details/50669350">Git版本控制：Git高级教程</a>]</p> 
<h3><a name="t18"></a><a name="t18"></a><code>撤销git add .</code></h3> 
<p><code>git reset HEAD . 也就是刚刚git add了文件，将其从暂存区删除，不add</code></p> 
<p><code>git reset HEAD DIR/* 只撤销DIR目录下的所有文件</code></p> 
<p><strong>把文件提交到仓库</strong></p> 
<p><strong><span style="color:#33cc00;"><code>$ git commit -m "wrote a readme file"</code></span></strong></p> 
<p><code><span style="color:#ff0000;"><strong>Note</strong></span>:</code></p> 
<p><code>1. -m</code>后面输入的是本次提交的说明，可以输入任意内容。如果说明中没有空格等分隔符，可以省略""号。</p> 
<p>2. 提交信息内容的建议：写明为什么，不要写做了什么. Anyone can see WHAT you did just by looking at the code. But the code can never tell someone WHY you did it.using the word “should” can help frame things.</p> 
<p>[<a href="http://sundeepgupta.ca/writing-great-git-commit-messages/">Writing Great Git Commit Messages</a>][<a href="https://arialdomartini.wordpress.com/2012/09/03/pre-emptive-commit-comments/">Preemptive commit comments</a>]</p> 
<p><code>commit</code>可以一次提交很多文件，所以你可以多次<code>add</code>不同的文件。commit后暂存区中的都提交了。</p> 
<p><span style="color:#ff0000;"><strong>总结</strong></span></p> 
<p>在本地创建repository版本管理的步骤如下</p> 
<pre class="has" name="code"><code class="language-copyable-terminal-content hljs"><ol class="hljs-ln"><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="1"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">git init</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="2"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">git add README.md</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="3"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">git commit -m "first commit"</div></div></li></ol></code>
git add README.md
git commit -m "first commit"<div class="hljs-button signin" data-title="登录后复制" data-report-click="{&quot;spm&quot;:&quot;1001.2101.3001.4259&quot;}" onclick="hljs.signin(event)"></div></pre> 
<p><strong>Note</strong>:在github上创建完成repository后就是这个提示。</p> 
<p><a href="http://blog.csdn.net/pipisorry">皮皮Blog</a></p> 
<p>&nbsp;</p> 
<p>&nbsp;</p> 
<h1><a name="t19"></a><a name="t19"></a><span style="color:#ff0000;">工作区和暂存区</span></h1> 
<p><span style="color:#ff0000;"><strong>工作区</strong>（Working Directory）</span>：就是你在电脑里能看到的目录，比如E:\mine\<strong>pythonworkspace文件夹</strong>。也叫Working tree？</p> 
<p><span style="color:#ff0000;"><strong>版本库</strong>（<strong>Repository</strong>）</span>：工作区有一个<strong>隐藏目录<code>.git</code></strong>，这个不算工作区，而是Git的版本库。</p> 
<p>Git的版本库里存了很多东西，其中最重要的就是称为<span style="color:#ff0000;">stage（或者叫index）的暂存区</span>，还有Git为我们自动创建的第一个分支<code>master</code>，以及指向<code>master</code>的一个指针叫<code>HEAD</code>。</p> 
<p><img alt="" src="https://img-blog.csdn.net/20150404212650364?watermark/2/text/aHR0cDovL2Jsb2cuY3Nkbi5uZXQvcGlwaXNvcnJ5/font/5a6L5L2T/fontsize/400/fill/I0JBQkFCMA==/dissolve/70/gravity/Center" width="490" height="300"></p> 
<h3><a name="t20"></a><a name="t20"></a>把文件往Git版本库里添加的时候，是分两步执行的</h3> 
<p>第一步是用<code>git add</code>把文件添加进去，实际上就是把文件修改添加到暂存区(stage)；</p> 
<p>第二步是用<code>git commit</code>提交更改，实际上就是把暂存区的所有内容提交到当前分支(master)。（但个人理解<span style="color:#ff0000;">commit后应该并没有清空stage</span>，因为可以使用git rm --cached来将commit的大文件从stage中删除）</p> 
<p>git add两个文件后，暂存区的状态就变成这样了：</p> 
<p><img alt="" src="https://img-blog.csdn.net/20150404212631523?watermark/2/text/aHR0cDovL2Jsb2cuY3Nkbi5uZXQvcGlwaXNvcnJ5/font/5a6L5L2T/fontsize/400/fill/I0JBQkFCMA==/dissolve/70/gravity/Center" width="490" height="300"></p> 
<p>所以，<code>git add</code>命令实际上就是把要提交的所有修改放到暂存区（Stage），然后，执行<code>git commit</code>就可以一次性把暂存区的所有修改提交到分支。一旦提交后，如果你又没有对工作区做任何修改，那么工作区就是“干净”的。现在版本库变成了这样，暂存区就没有任何内容了：</p> 
<p><img alt="" src="https://img-blog.csdn.net/20150404212727867?watermark/2/text/aHR0cDovL2Jsb2cuY3Nkbi5uZXQvcGlwaXNvcnJ5/font/5a6L5L2T/fontsize/400/fill/I0JBQkFCMA==/dissolve/70/gravity/Center" width="490" height="300"></p> 
<p>&nbsp;</p> 
<p><strong><span style="color:#ff0000;">git中代码的三种状态：</span></strong>unstaged, staged 和 committed</p> 
<p>unstaged表示该代码尚未开发完成，staged表示代码开发完成了，准备提交但是尚未提交，committed自然就是提交过的了。</p> 
<p>让代码从unstaged变成staged，要通过命令<span style="color:#33cc00;"><strong>git add &lt;files&gt;</strong></span>和<span style="color:#33cc00;"><strong>git rm &lt;files&gt;</strong></span></p> 
<p>让代码从staged变成committed，自然要使用命令<span style="color:#33cc00;"><strong>git commit</strong></span></p> 
<p><strong>Note</strong>:&nbsp;&nbsp;Untracked Files，也就是那些从来没有被 Git 记录过的文件（自添加以后，从未 add 及 commit 过的文件）或者是加入到ignore文件中去的那些？</p> 
<p>[http://nvie.com/posts/a-successful-git-branching-model/]</p> 
<p><a href="http://blog.csdn.net/pipisorry">皮皮Blog</a></p> 
<p>&nbsp;</p> 
<p>&nbsp;</p> 
<h1><a name="t21"></a><a name="t21"></a><span style="color:#ff0000;">自定义Git</span></h1> 
<p>在安装Git中，我们已经配置了<code>user.name</code>和<code>user.email</code>，实际上，Git还有很多可配置项。</p> 
<h3><a name="t22"></a><a name="t22"></a><strong><span style="color:#ff0000;">让Git显示颜色</span></strong></h3> 
<p><code>$ <span style="color:#33cc00;"><strong>git config --global color.ui true</strong></span></code></p> 
<p>这样，Git会适当地显示不同的颜色，比如<code>git status</code>命令，文件名就会标上颜色。</p> 
<h3><a name="t23"></a><a name="t23"></a><strong><span style="color:#ff0000;">配置别名</span></strong></h3> 
<pre><code class="hljs ruby">$ git config --global <span class="hljs-keyword">alias</span>.st status</code><div class="hljs-button signin" data-title="登录后复制" data-report-click="{&quot;spm&quot;:&quot;1001.2101.3001.4259&quot;}" onclick="hljs.signin(event)"></div></pre> 
<pre><code class="hljs ruby"><ol class="hljs-ln"><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="1"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git config --global <span class="hljs-keyword">alias</span>.co checkout</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="2"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git config --global <span class="hljs-keyword">alias</span>.ci commit</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="3"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ git config --global <span class="hljs-keyword">alias</span>.br branch</div></div></li></ol></code><div class="hljs-button signin" data-title="登录后复制" data-report-click="{&quot;spm&quot;:&quot;1001.2101.3001.4259&quot;}" onclick="hljs.signin(event)"></div></pre> 
<p>以后<strong>提交</strong>就可以简写成：</p> 
<pre><code class="hljs ruby">$ git ci -m <span class="hljs-string">"bala bala bala..."</span>
</code><div class="hljs-button signin" data-title="登录后复制" data-report-click="{&quot;spm&quot;:&quot;1001.2101.3001.4259&quot;}" onclick="hljs.signin(event)"></div></pre> 
<p><code>--global</code>参数是全局参数，也就是这些命令在这台电脑的所有Git仓库下都有用。</p> 
<p>在<strong>撤销修改</strong>中，我们知道，命令<code>git reset HEAD file</code>可以把暂存区的修改撤销掉（unstage），重新放回工作区。既然是一个unstage操作，就可以配置一个<code>unstage</code>别名：</p> 
<pre><code class="hljs ruby">$ git config --global <span class="hljs-keyword">alias</span>.unstage <span class="hljs-string">'reset HEAD'</span>
</code><div class="hljs-button signin" data-title="登录后复制" data-report-click="{&quot;spm&quot;:&quot;1001.2101.3001.4259&quot;}" onclick="hljs.signin(event)"></div></pre> 
<p>当你敲入命令：</p> 
<pre><code class="hljs ruby">$ git unstage test.py
</code><div class="hljs-button signin" data-title="登录后复制" data-report-click="{&quot;spm&quot;:&quot;1001.2101.3001.4259&quot;}" onclick="hljs.signin(event)"></div></pre> 
<p>实际上Git执行的是：</p> 
<pre><code class="hljs sql">$ git <span class="hljs-keyword">reset</span> <span class="hljs-keyword">HEAD</span> test.py
</code><div class="hljs-button signin" data-title="登录后复制" data-report-click="{&quot;spm&quot;:&quot;1001.2101.3001.4259&quot;}" onclick="hljs.signin(event)"></div></pre> 
<p><strong>配置一个<code>git last</code>，让其显示最后一次提交信息：</strong></p> 
<pre><code class="hljs ruby">$ git config --global <span class="hljs-keyword">alias</span>.last <span class="hljs-string">'log -1'</span>
</code><div class="hljs-button signin" data-title="登录后复制" data-report-click="{&quot;spm&quot;:&quot;1001.2101.3001.4259&quot;}" onclick="hljs.signin(event)"></div></pre> 
<p>这样，用<code>git last</code>就能显示最近一次的提交：</p> 
<pre><code class="hljs yaml"><ol class="hljs-ln"><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="1"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-string">$</span> <span class="hljs-string">git</span> <span class="hljs-string">last</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="2"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-string">commit</span> <span class="hljs-string">adca45d317e6d8a4b23f9811c3d7b7f0f180bfe2</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="3"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-attr">Merge:</span> <span class="hljs-string">bd6ae48</span> <span class="hljs-string">291bea8</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="4"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-attr">Author:</span> <span class="hljs-string">Michael</span> <span class="hljs-string">Liao</span> <span class="hljs-string">&lt;askxuefeng@gmail.com&gt;</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="5"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-attr">Date:</span>   <span class="hljs-string">Thu</span> <span class="hljs-string">Aug</span> <span class="hljs-number">22</span> <span class="hljs-number">22</span><span class="hljs-string">:49:22</span> <span class="hljs-number">2013</span> <span class="hljs-string">+0800</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="6"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="7"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">    <span class="hljs-string">merge</span> <span class="hljs-string">&amp;</span> <span class="hljs-string">fix</span> <span class="hljs-string">hello.py</span></div></div></li></ol></code><div class="hljs-button signin" data-title="登录后复制" data-report-click="{&quot;spm&quot;:&quot;1001.2101.3001.4259&quot;}" onclick="hljs.signin(event)"></div></pre> 
<p>甚至还有人丧心病狂地把<code>lg</code>配置成了：</p> 
<pre><code class="hljs perl">git config --global alias.lg <span class="hljs-string">"log --color --graph --pretty=format:'%Cred%h%Creset -%C(yellow)%d%Creset %s %Cgreen(%cr) %C(bold blue)&lt;%an&gt;%Creset' --abbrev-commit"</span>
</code><div class="hljs-button signin" data-title="登录后复制" data-report-click="{&quot;spm&quot;:&quot;1001.2101.3001.4259&quot;}" onclick="hljs.signin(event)"></div></pre> 
<p><img alt="" src="https://img-blog.csdn.net/20150420193124637?watermark/2/text/aHR0cDovL2Jsb2cuY3Nkbi5uZXQvcGlwaXNvcnJ5/font/5a6L5L2T/fontsize/400/fill/I0JBQkFCMA==/dissolve/70/gravity/Center" width="488" height="355"></p> 
<h3><a name="t24"></a><a name="t24"></a><strong><span style="color:#ff0000;">配置文件</span></strong></h3> 
<p>配置Git的时候，加上<span style="color:#ff0000;"><strong><code>--global</code></strong></span>是针对当前用户起作用的，如果不加，那只针对当前的仓库起作用。</p> 
<p>每个<strong>仓库的Git配置文件</strong>都放在<code>.git/config</code>文件中：</p> 
<pre><code class="hljs ruby"><ol class="hljs-ln"><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="1"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">$ cat .git/config </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="2"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">[core]</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="3"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">    repositoryformatversion = <span class="hljs-number">0</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="4"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">    filemode = <span class="hljs-literal">true</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="5"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">    bare = <span class="hljs-literal">false</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="6"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">    logallrefupdates = <span class="hljs-literal">true</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="7"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">    ignorecase = <span class="hljs-literal">true</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="8"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">    precomposeunicode = <span class="hljs-literal">true</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="9"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">[remote <span class="hljs-string">"origin"</span>]</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="10"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">    url = git@github.<span class="hljs-symbol">com:</span>michaelliao/learngit.git</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="11"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">    fetch = +refs/heads/*<span class="hljs-symbol">:refs/remotes/origin/*</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="12"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">[branch <span class="hljs-string">"master"</span>]</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="13"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">    remote = origin</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="14"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">    merge = refs/heads/master</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="15"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">[<span class="hljs-keyword">alias</span>]</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="16"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">    last = log -<span class="hljs-number">1</span></div></div></li></ol></code><div class="hljs-button signin" data-title="登录后复制" data-report-click="{&quot;spm&quot;:&quot;1001.2101.3001.4259&quot;}" onclick="hljs.signin(event)"></div></pre> 
<p>别名就在<code>[alias]</code>后面，要删除别名，直接把对应的行删掉即可。</p> 
<p>而<strong>当前用户的Git配置文件</strong>放在用户主目录下的一个隐藏文件<code>.gitconfig</code>中：</p> 
<pre><code class="hljs properties"><ol class="hljs-ln"><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="1"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-meta">$</span> <span class="hljs-string">cat .gitconfig</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="2"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-attr">[alias]</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="3"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">    <span class="hljs-attr">co</span> = <span class="hljs-string">checkout</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="4"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">    <span class="hljs-attr">ci</span> = <span class="hljs-string">commit</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="5"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">    <span class="hljs-attr">br</span> = <span class="hljs-string">branch</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="6"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">    <span class="hljs-attr">st</span> = <span class="hljs-string">status</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="7"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-attr">[user]</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="8"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">    <span class="hljs-attr">name</span> = <span class="hljs-string">Your Name</span></div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="9"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line">    <span class="hljs-attr">email</span> = <span class="hljs-string">your@email.com</span></div></div></li></ol></code><div class="hljs-button signin" data-title="登录后复制" data-report-click="{&quot;spm&quot;:&quot;1001.2101.3001.4259&quot;}" onclick="hljs.signin(event)"></div></pre> 
<p>配置别名也可以直接修改这个文件，如果改错了，可以删掉文件重新通过命令配置。</p> 
<h3><a name="t25"></a><a name="t25"></a><strong><span style="color:#ff0000;">设置git启动时的默认工作目录</span></strong></h3> 
<p>windows下找到git安装目录下 e.g. D:\Git\etc\profile文件，在最前面加上默认工作目录，如：</p> 
<p><strong><span style="color:#33cc00;">cd E:/mine/python_workspace</span></strong></p> 
<p>&nbsp;</p> 
<h3><a name="t26"></a><a name="t26"></a><span style="color:#ff0000;">Git自动补全</span></h3> 
<p>lz提示一下，windows下是自带有的，哈哈。</p> 
<p>在Unix系统下，运行以下指令来获取脚本：</p> 
<p>cd ~<br> curl https://raw.github.com/git/git/master/contrib/completion/git-completion.bash -o ~/.git-completion.bash<br> 然后，在您的~/.bash_profile文件中添加以下代码：<br> if [ -f ~/.git-completion.bash ]; then<br> &nbsp; &nbsp; . ~/.git-completion.bash<br> fi<br> 尽管我之前就提到过，在这里我仍要不厌其烦的说：如果你想使用Git提供的全部功能，你肯定是需要转而使用命令行来操作的。</p> 
<p>from:<a href="http://blog.csdn.net/pipisorry/article/details/44588351">http://blog.csdn.net/pipisorry/article/details/44588351</a></p> 
<p>ref:<a href="http://git-scm.com/doc">git Documentation</a></p> 
<p><a href="http://git-scm.com/book/zh/v2">git book</a>*</p> 
<p><a href="https://git-scm.com/docs">git command Reference</a>*</p> 
<p><a href="https://www.kernel.org/pub/software/scm/git/docs/">git(1) Manual Page</a></p> 
<p><a href="http://shanewfx.github.io/blog/2012/04/21/learn-git-command/">Git学习笔记</a></p> 
<p><a href="http://www.liaoxuefeng.com/">http://www.liaoxuefeng.com/</a></p> 
<p><a href="http://gitref.org/">http://gitref.org/</a></p> 
<p><a href="http://mp.weixin.qq.com/s?__biz=MjM5NzU0MzU0Nw==&amp;mid=205598569&amp;idx=1&amp;sn=aef9a8ecd58c15222db24a9f924d06e7&amp;scene=1&amp;from=singlemessage&amp;isappinstalled=0#rd">git入门经典</a></p> 
<p><a href="https://www.gitbook.com/book/lvwzhen/git-tutorial/details">Git-Tutorial-ebook+github+tutorial</a></p> 
<p><a href="http://rogerdudler.github.io/git-guide/index.zh.html">git - 简明指南</a></p> 
<p><a href="http://blog.jobbole.com/85772/">Git 10 周年访谈：Linus 讲述背后故事 - 推荐阅读</a></p> 
<p><a href="http://my.oschina.net/meilihao/blog/157471?p=%7B%7BtotalPage%7D%7D">git 问题</a></p> 
<p><a href="http://ms.csdn.net/share/2679DDA88F3356B66DDE6537431F4F3C_1_IPHONE_APP">版本控制工具(CVS、SVN、GIT)简介</a></p> 
<p><a href="https://medium.freecodecamp.com/understanding-git-for-real-by-exploring-the-git-directory-1e079c15b807#.jz255ruv1">探索.git目录了解Git的真相</a></p> 
<p>&nbsp;</p>
                </div><div data-report-view="{&quot;mod&quot;:&quot;1585297308_001&quot;,&quot;dest&quot;:&quot;https://youzipi.blog.csdn.net/article/details/44588351&quot;,&quot;extend1&quot;:&quot;pc&quot;,&quot;ab&quot;:&quot;new&quot;}"><div></div></div>
        </div>
    </article>
<!-- ************************************************************** -->
<hr><hr>

<!-- ************************************************************** -->
<hr><hr>

<!-- ************************************************************** -->
<hr><hr>



                        </div>


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
    li{
        list-style-type: none;    
    }
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