<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"> <h2>Laravel Artisan & Tinker</h2></div>
                    <div class="card-body">
                        <div>
                            <div class="subjecta">

<h2>Artisan</h2> 
<p>Artisan 是 Laravel 提供的 CLI（命令行接口），它提供了非常多实用的命令来帮助我们开发 Laravel 应用。</p>

<p><strong>1.make 相关</strong></p>

<ul><li> <p>创建控制器<br> <code>php artisan make:controller [name]</code></p>
 </li>
 <li> <p>创建模型同时生成新建表的迁移<br> <code>php artisan make:model [name] -m</code></p>
 </li>
 <li> <p>创建模型同时生成新建表的工厂<br> <code>php artisan make:model -f</code></p>
 </li>
 <li> <p>创建新建表的迁移<br> <code>php artisan make:migration [name] --create=students //创建students表的迁移</code></p>
 </li>
 <li> <p>创建修改旧表的迁移<br> <code>php artisan make:migration add_votes_to_users_table --table=students//给students表增加votes字段</code></p>
 </li>
 <li> <p>创建一个服务提供商的类<br> <code>php artisan make:provider [name]</code></p>
 </li>
 <li> <p>创建一个中间件<br> <code>php artisan make:middleware [name]</code></p>
 </li>
 <li> <p>创建填充<br> <code>php artisan make:seeder StudentTableSeeder</code></p>
 </li>
</ul> 
<p><strong>2.数据库相关</strong></p>

<ul><li> <p>执行迁移<br> <code>php artisan migrate</code></p>
 </li>
 <li> <p>回滚所有迁移后再执行所有迁移<br> <code>php artisan migrate refresh</code></p>
 </li>
 <li> <p>回滚上一次的迁移<br> <code>php artisan migrate:rollback</code></p>
 </li>
 <li> <p>回滚所有迁移<br> <code>php artisan migrate:reset</code></p>
 </li>
 <li> <p>执行单个填充<br> <code>php artisan db:seed --class=StudentTableSeeder</code></p>
 </li>
 <li> <p>执行所有填充<br> <code>php artisan db:seed</code></p>
 </li>
</ul> 
<p><strong>3.其他</strong></p>

<ul><li> <p>查看某个帮助命令<br> <code>php artisan help make:model</code></p>
 </li>
 <li> <p>查看 Laravel 版本<br> <code>php artisan --version</code></p>
 </li>
 <li> <p>生成一个随机的 key，并自动更新到 app/config/app.php 的 key 键值对（刚安装好需要做这一步）<br> <code>php artisan key:generate</code></p>
 </li>
 <li> <p>开启Auth用户功能（开启后需要执行迁移才生效）<br> <code>php artisan make:auth</code></p>
 </li>
 <li> <p>进入 tinker 模式<br> <code>php artisan tinker</code></p>
 </li>
 <li> <p>列出所有路由<br> <code>php artisan route:list</code></p>
 </li>
 <li> <p>生成路由缓存以及移除路由缓存<br> <code>php artisan route:cache</code><br> <code>php artisan route:clear</code></p>
 </li>
</ul> 
</div>

<div class="subjectb">

<h2>Tinker,先要安装tinker,命令：composer require laravel/tinker</h2> 
<p>在 Laravel 命令行中操作数据库的工具。<br> 注意事项：必须要先在\app目录下对应的模型文件中设置<code title="可允许操作的字段列表">protected $fillable=[] </code>或<code title="为空则表示所有字段均可允许操作，填入字段与fillable相反"> protected $guarded=[];</code>需要控制的字段，不然会报错或者数据无法更新</p>

<p><strong>基本操作</strong></p>

<ul><li>进入 tinker 环境<br> <code>php artisan tinker</code></li>
    <li>指定操作模型，即指定操作哪一张表，例如指定 User 表<br> <code>use App\Models\User</code></li>
</ul> 
<p><strong>增</strong>：新增对象，即在数据表中插入一条数据</p>

<ul><li>使用 create 方法<br> <code>User::create(['account'=&gt;'Lewis','email'=&gt;'lewis@126.com'])</code></li>
    <li>使用 save 方法<br> <code>$user = new User</code><br> <code>$user-&gt;name = 'Lewis2'</code><br> <code>$user-&gt;email = 'lewis2@126.com'</code><br> <code>$user-&gt;save()</code></li>
</ul> 
<p><strong>删</strong></p>

<ul><li>删除指定记录<br> <code>$user = User::find(1)</code><br> <code>$user-&gt;delete()</code></li>
<li>表中的所有记录<br> <code>模型名::truncate();清除表中所有记录</code><br> <code>App\tools::truncate();</code></li>
</ul> 
<p><strong>改</strong></p>

<ul><li>使用 save 方法<br> <code>$user = User::find(1)</code><br> <code>$user-&gt;name = 'zhongliwen'</code><br> <code>$user-&gt;save()</code></li>
    <li>使用 update 方法<br> <code>$user = User::find(1)</code><br> <code>$user-&gt;update(['name'=&gt;'zhongliwen'])</code></li>
</ul> 

<p><strong>查</strong></p>
<ul>
<li>获取表中记录个数<br> <code>User::count()</code></li>
<li>获取表中所有记录<br> <code>User::all()</code></li>
<li>获取第一个记录<br> <code>User::first()</code></li>
<li>获取第一个记录<br> <code>User::all()->first()</code></li>
<li>获取第5个记录<br> <code>User::all()->find(5)</code></li>
<li>获取指定条件记录<br> <code>User::where('name','Lewis')-&gt;first() // 获取指定条件的第一个记录</code><br> <code>User::where('name','Lewis')-&gt;select()-&gt;get() //获取指定条件的所有记录</code></li>
<li>获取指定条件记录<br> <code>Customer::where('id',9)->get()
</code><br> <code>User::where('name','Lewis')-&gt;select()-&gt;get() //获取指定条件的所有记录</code></li>
<li>获取指定 id 的记录<br> <code>User::find(2)</code></li>
<li>关系记录查询，查询用户发表的post<br> <code>$user = App\User::with('posts')->first();</code></li>
<li><code>$user->posts;</code></li>
</ul> 

<p><strong>高级操作，数据填充</strong></p>
<ul>
<li>填充10条数据到user表中<br> <code>factory(App\User::class, 10)->create();</code></li>
<li>或<br> <code>factory('App\User',10)->create()</code></li>
<li>查询总记录条数<br> <code>App\User::count();</code></li>
<li>查询全部记录<br> <code>App\User::all();</code></li>
<li>pluck方法只查询单一字段的所有记录<br> <code>User::all()->pluck(‘name‘);//查看用户名
</code></li>
</ul> 

<p><strong>高级操作，查看源码</strong></p>
<ul>
<li>REPL 中打印出某个 类/方法 的源代码<br> <code>show 模型名</code></li>
<li>如<br> <code>show dd</code></li>
</ul> 

                </div>

<div class="subjecta">
<h1><a href="https://github.com/fzaninotto/Faker#basic-usage">Faker</a> 安装命令：composer require fzaninotto/faker 
在Tinker下测试faker</h1>

<code>
    <pre>
$ php artisan tinker
Psy Shell v0.9.12 (PHP 7.3.4 — cli) by Justin Hileman
>>> $f =app(Faker\Generator::class);
=> Faker\Generator {#4005}
>>> $f->word
=> "autem"
>>> $f->word
=> "impedit"
>>> $f->randomdigit
=> 0
>>> $f->randomdigit
=> 3
>>> $f->state
=> "河南省"
>>> $f->word
=> "enim"
>>> $f->stateabbr
=> "沪"
>>> $f->company
=> "精芯传媒有限公司"

    </pre>
</code>

<p>安装错误解决办法</p>
<code>Fatal error: Allowed memory size of 1610612736 bytes exhausted (tried to......</code>
<p>安装错误解决办法1:打开 php.ini 配置文件，搜索 memory_limit 配置项,值主，设为-1，重启服务器</p>
<p>安装错误解决办法2:使用安装命令：php -d memory_limit=-1 /usr/bin/composer require xxxx/xxxxxxx</p>
<div>
<div >
<h1 >安装</b></h1><br>
<p>在laravel中已经自动集成，无需手动安装。如需在其他地方使用，可使用以下命令进行安装。</p>
<div>
<code-box ><code-line ></code-line>composer require fzaninotto/faker
</code-pre></pre></code-box>
</div>
<h1 >为Faker指定中文支持</b></h1>
<p><strong>可通过在&nbsp;<code>config/app.php</code>&nbsp;增加如下配置使其支持中文：</strong></p>
<div>
<code-box ><code-line ></code-line>'faker_locale' =&gt; 'zh_CN',
</code-pre></pre></code-box>
</div>
<h1 >基本用法</b></h1>
<h2 >Formatters 格式化器</b></h2>
<h3><code>Faker\Provider\Base 基本</code></h3>
<div>

<code-box ><code-line ></code-line>$randomDigit = $faker-&gt;randomDigit;//生成0-9之间的随机数
<code-line ></code-line>$randomDigitNotNull = $faker-&gt;randomDigitNotNull;//生成1-9之间的随机数
<code-line ></code-line>$randomNumber = $faker-&gt;randomNumber(5, true);//生成5位整数，true表示严格模式，即只能5位
<code-line ></code-line>$randomFloat = $faker-&gt;randomFloat(2, 0, 10);//生成浮点数，两位小数点，范围是0-10之间
<code-line ></code-line>$numberBetween = $faker-&gt;numberBetween(0, 100);//生成随机整数，范围是0-100之间
<code-line ></code-line>$randomLetter = $faker-&gt;randomLetter;//返回a-z之间任意的一个小写字符
<code-line ></code-line>$randomElements = $faker-&gt;randomElements(['a', 'b', 'c', 'd'], 2);//返回数组中的随机两个元素
<code-line ></code-line>$randomElement = $faker-&gt;randomElement(['aa', 'bb', 'cc', 'dd']);//随机返回数组中的一个元素
<code-line ></code-line>$suffle = $faker-&gt;shuffle('hello, world'); //将字串中的字符打乱返回
<code-line ></code-line>$suffle = $faker-&gt;shuffle(['aa', 'bb', 'cc', 'dd']); //将数组中的元素打乱返回
<code-line ></code-line>$numerify = $faker-&gt;numerify('Hello #####');//#####替换为随机数字，输出类似：Hello 03501
<code-line ></code-line>$lexify = $faker-&gt;lexify('Hello ???');//???替换为3个随机小写字符，输出类似：Hello krg
<code-line ></code-line>$bothify = $faker-&gt;bothify('hello ##??');//#替换为随机数字,?替换为随机小写字符.输出类似：hello 15cr
<code-line ></code-line>$asciify = $faker-&gt;asciify('hello *****');//*替换为随机字符，输出类似：hello 5Ynt[
<code-line ></code-line>$regexify = $faker-&gt;regexify('[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}');//根据正则表达式返回字串
</code-pre></pre></code-box>

</div>
<h3>&nbsp;<code>Faker\Provider\Lorem 文本</code></h3>
<div>

<code-box ><code-line ></code-line>$word = $faker-&gt;word;//返回一个单词
<code-line ></code-line>$words = $faker-&gt;words(3, false);//返回3个单词，false表示返回一个数组；true表示返回一个字符串，单词之间用空格分开
<code-line ></code-line>$sentence = $faker-&gt;sentence(5, true);//返回一个句子，false表示只能含有5个单词，true表示可以在5个单词左右
<code-line ></code-line>$sentences = $faker-&gt;sentences(3, false);//返回3条句子，false表示返回一个数组，true表示将三条句子拼成一条返回
<code-line ></code-line>$paragraph = $faker-&gt;paragraph(3, true);//返回一个段落，由3条句子组成。false表示只能有3条句子，true表示可以在3条句子左右
<code-line ></code-line>$paragraphs = $faker-&gt;paragraphs(4, false);//返回4个段落。false表示返回一个数组，true表示将段落拼接在一起，并且用换行符分割
<code-line ></code-line>$text = $faker-&gt;text(200);//返回一段文本，最多只能含有200个字符
</code-pre></pre></code-box>

</div>
<h3>&nbsp;<code>Faker\Provider\en_US\Person 人物<br></code></h3>
<div>

<code-box ><code-line ></code-line>$title = $faker-&gt;title('female');//参数：title($gender = null|'male'|'female') .返回称呼。例如：Mrs.|Prof.|Dr.
<code-line ></code-line>$titleMale = $faker-&gt;titleMale;//返回男性称呼
<code-line ></code-line>$titleFemale = $faker-&gt;titleFemale;//返回女性称呼
<code-line ></code-line>$name = $faker-&gt;name('female');//参数：name($gender = null|'male'|'female') .返回姓名
<code-line ></code-line>$firstName = $faker-&gt;firstName('female');//参数：firstName($gender = null|'male'|'female') .返回名
<code-line ></code-line>$firstNameMale = $faker-&gt;firstNameMale;//男性名字
<code-line ></code-line>$firstNameFemale = $faker-&gt;firstNameFemale;//女性名字
<code-line ></code-line>$lastName = $faker-&gt;lastName;//姓
</code-pre></pre></code-box>

</div>
<h3>Faker\Provider\en_US\Address&nbsp; 地址</h3>
<div>

<code-box ><code-line ></code-line>$cityPrefix = $faker-&gt;cityPrefix;//城市前缀.如：Lake
<code-line ></code-line>$secondaryAddress = $faker-&gt;secondaryAddress;//二级地址.如：Suite 061
<code-line ></code-line>$state = $faker-&gt;state;//州、省（如：Colorado、四川省）
<code-line ></code-line>$stateAbbr = $faker-&gt;stateAbbr;//省份简称.如：晋、蒙、浙、冀
<code-line ></code-line>$citySuffix = $faker-&gt;citySuffix;//城市后缀.如：side、land、port、Ville
<code-line ></code-line>$streetSuffix = $faker-&gt;streetSuffix;//街道后缀.如：Ramp、Plains
<code-line ></code-line>$buildingNumber = $faker-&gt;buildingNumber;//建筑物编号
<code-line ></code-line>$city = $faker-&gt;city;//城市
<code-line ></code-line>$streetName = $faker-&gt;streetName;//街道名称
<code-line ></code-line>$streetAddress = $faker-&gt;streetAddress;//街道地址
<code-line ></code-line>$postcode = $faker-&gt;postcode;//邮政编码
<code-line ></code-line>$address = $faker-&gt;address;//地址（城市+区）
<code-line ></code-line>$country = $faker-&gt;country;//国家
<code-line ></code-line>$latitude = $faker-&gt;latitude;//纬度 latitude($min = -90, $max = 90)
<code-line ></code-line>$longitude = $faker-&gt;longitude;//经度 longitude($min = -180, $max = 180)
</code-pre></pre></code-box>

</div>
<h3>Faker\Provider\en_US\PhoneNumber 电话号码</h3>
<div>
<code-box ><code-line ></code-line>$phoneNumber = $faker-&gt;phoneNumber;//手机号码
<code-line ></code-line>$tollFreePhoneNumber = $faker-&gt;tollFreePhoneNumber;
<code-line ></code-line>$e164PhoneNumber = $faker-&gt;e164PhoneNumber;
</code-pre></pre></code-box>
</div>
<h3>Faker\Provider\en_US\Company 公司</h3>
<div>
<code-box ><code-line ></code-line>$catchPhrase = $faker-&gt;catchPhrase;//口号
<code-line ></code-line>$bs = $faker-&gt;bs;
<code-line ></code-line>$company = $faker-&gt;company;//公司名称
<code-line ></code-line>$companySuffix = $faker-&gt;companySuffix;//公司名称后缀
<code-line ></code-line>$jobTitle = $faker-&gt;jobTitle;//职称
</code-pre></pre></code-box>
</div>
<h3><code>Faker\Provider\en_US\Text 文本</code></h3>
<div>
<code-box ><code-line ></code-line>$realText = $faker-&gt;realText();//一段叙事文本
</code-pre></pre></code-box>
</div>
<h3><code>Faker\Provider\DateTime 日期时间</code></h3>
<div>

<code-box ><code-line ></code-line>$unixTime = $faker-&gt;unixTime;//返回随机时间戳
<code-line ></code-line>$unixTime = $faker-&gt;unixTime('now');//返回随机时间戳 可选最后截止时间
<code-line ></code-line>$dateTime = $faker-&gt;dateTime;//返回一个随机的DateTime对象
<code-line ></code-line>$dateTime = $faker-&gt;dateTime('now', 'PRC');//返回一个随机的DateTime对象，可选择最后截止时间和时区
<code-line ></code-line>$dateTimeAD = $faker-&gt;dateTimeAD;//返回一个随机的DateTime对象
<code-line ></code-line>$dateTimeAD = $faker-&gt;dateTimeAD('now', 'PRC');//返回一个随机的DateTime对象，可选择最后截止时间和时区
<code-line ></code-line>$iso8601 = $faker-&gt;iso8601;//返回一个随机的字符串形式的时间
<code-line ></code-line>$iso8601 = $faker-&gt;iso8601('now');//返回一个随机的字符串形式的时间,可选择最后截止时间
<code-line ></code-line>$date = $faker-&gt;date("Y-m-d H:i:s", 'now');//指定格式返回时间,可选择最后截止时间
<code-line ></code-line>$time = $faker-&gt;time('Y-m-d H:i:s', 'now');//(同上)指定格式返回时间,可选择最后截止时间
<code-line ></code-line>$dateTimeBetween = $faker-&gt;dateTimeBetween('2019-01-01', 'now', 'PRC');//返回指定时间区间的DateTime对象，可选时区
<code-line ></code-line>$dateTimeInInterval = $faker-&gt;dateTimeInInterval('-5 years', '+5 days', 'PRC');//返回指定时间区间的DateTime对象，可选时区(第一个参数：开始时间，第二个参数：时间范围)
<code-line ></code-line>$dateTimeThisCentury = $faker-&gt;dateTimeThisCentury;//返回一个本世纪内的DateTime对象
<code-line ></code-line>$dateTimeThisCentury = $faker-&gt;dateTimeThisCentury('1950-01-01', 'PRC');//返回一个本世纪内的DateTime对象.指定截止时间和时区
<code-line ></code-line>$dateTimeThisDecade = $faker-&gt;dateTimeThisDecade;//返回一个前十年内的DateTime对象
<code-line ></code-line>$dateTimeThisDecade = $faker-&gt;dateTimeThisDecade('2015-01-01', 'PRC');//返回一个前十年内的DateTime对象.指定允许的最后时间和时区
<code-line ></code-line>$dateTimeThisYear = $faker-&gt;dateTimeThisYear;//返回一个前一年内的DateTime对象
<code-line ></code-line>$dateTimeThisYear = $faker-&gt;dateTimeThisYear('now', 'PRC');//返回一个前一年内的DateTime对象.指定允许的最后时间和时区
<code-line ></code-line>$dateTimeThisMonth = $faker-&gt;dateTimeThisMonth;//返回一个前一个月内的DateTime对象
<code-line ></code-line>$dateTimeThisMonth = $faker-&gt;dateTimeThisMonth('-15 days', 'PRC');//返回一个前一个月内的DateTime对象.指定允许的最后时间和时区
<code-line ></code-line>$amPm = $faker-&gt;amPm;//上午/下午
<code-line ></code-line>$dayOfMonth = $faker-&gt;dayOfMonth;//返回几号
<code-line ></code-line>$dayOfWeek = $faker-&gt;dayOfWeek;//返回星期几
<code-line ></code-line>$month = $faker-&gt;month;//返回月份
<code-line ></code-line>$monthName = $faker-&gt;monthName;//返回月份名称
<code-line ></code-line>$year = $faker-&gt;year;//返回年份
<code-line ></code-line>$year = $faker-&gt;year('2000-01-01');//返回年份.可指定最后截止日期
<code-line ></code-line>$timezone = $faker-&gt;timezone;//返回时区
</code-pre></pre></code-box>

</div>
<h3><code>Faker\Provider\Internet 互联网</code></h3>
<div>

<code-box ><code-line ></code-line>$email = $faker-&gt;email;//返回一个随机邮箱
<code-line ></code-line>$safeEmail = $faker-&gt;safeEmail;//返回一个以@example.com结尾的安全邮箱
<code-line ></code-line>$freeEmail = $faker-&gt;freeEmail;//返回一个随机邮箱
<code-line ></code-line>$companyEmail = $faker-&gt;companyEmail;//返回企业邮箱（中文语言包下不可用）
<code-line ></code-line>$freeEmailDomain = $faker-&gt;freeEmailDomain;//返回一个邮件域名
<code-line ></code-line>$safeEmailDomain = $faker-&gt;safeEmailDomain;//返回安全的邮件域名
<code-line ></code-line>$userName = $faker-&gt;userName;//用户名
<code-line ></code-line>$password = $faker-&gt;password;//密码
<code-line ></code-line>$domainName = $faker-&gt;domainName;//域名（中文语言包下不可用）
<code-line ></code-line>$domainWord = $faker-&gt;domainWord;//不带后缀的域名（中文语言包下不可用）
<code-line ></code-line>$tld = $faker-&gt;tld;//域名后缀：如com、org（中文语言包下不可用）
<code-line ></code-line>$url = $faker-&gt;url;//返回一个随机url（中文语言包下不可用）
<code-line ></code-line>$slug = $faker-&gt;slug;
<code-line ></code-line>$ipv4 = $faker-&gt;ipv4;//返回一个ipv4地址
<code-line ></code-line>$ipv6 = $faker-&gt;ipv6;//返回一个ipv6地址
<code-line ></code-line>$localIpv4 = $faker-&gt;localIpv4;
<code-line ></code-line>$macAddress = $faker-&gt;macAddress;//mac地址
</code-pre></pre></code-box>

</div>
<h3><code>Faker\Provider\UserAgent 用户代理</code></h3>
<div>

<code-box ><code-line ></code-line>$userAgent = $faker-&gt;userAgent;//返回一个随机的用户代理信息
<code-line ></code-line>$chrome = $faker-&gt;chrome;//返回一个chrome浏览器的用户代理信息
<code-line ></code-line>$firefox = $faker-&gt;firefox;//返回一个firefox浏览器的用户代理信息
<code-line ></code-line>$safari = $faker-&gt;safari;//返回一个safari浏览器的用户代理信息
<code-line ></code-line>$opera = $faker-&gt;opera;//返回一个opera浏览器的用户代理信息
<code-line ></code-line>$internetExplorer = $faker-&gt;internetExplorer;//返回一个internetExplorer浏览器的用户代理信息
</code-pre></pre></code-box>

</div>
<h3><code>Faker\Provider\Payment 支付</code></h3>
<div>

<code-box ><code-line ></code-line>$creditCardType = $faker-&gt;creditCardType;//信用卡类型
<code-line ></code-line>$creditCardNumber = $faker-&gt;creditCardNumber;//信用卡号
<code-line ></code-line>$creditCardExpirationDate = $faker-&gt;creditCardExpirationDate;//信用卡到期日 (DateTime对象)
<code-line ></code-line>$creditCardExpirationDateString = $faker-&gt;creditCardExpirationDateString;//信用卡到期日期字符串
<code-line ></code-line>$creditCardDetails = $faker-&gt;creditCardDetails;//信用卡详情（数组）
<code-line ></code-line>$swiftBicNumber = $faker-&gt;swiftBicNumber;
<code-line ></code-line>$iban = $faker-&gt;iban;//国际银行账户
</code-pre></pre></code-box>

</div>
<h3><code>Faker\Provider\Color 颜色</code></h3>
<div>

<code-box ><code-line ></code-line>$hexcolor = $faker-&gt;hexcolor;//十六进制的随机色：'#fa3cc2'
<code-line ></code-line>$rgbcolor = $faker-&gt;rgbcolor;//RGB格式的随机色（字串形式）：'0,255,122'
<code-line ></code-line>$rgbColorAsArray = $faker-&gt;rgbColorAsArray;//RGB格式的随机色（数组形式）：array(0,255,122)
<code-line ></code-line>$rgbCssColor = $faker-&gt;rgbCssColor;//RGB格式的随机色的css表示：'rgb(0,255,122)'
<code-line ></code-line>$safeColorName = $faker-&gt;safeColorName;//一个安全的随机色名称
<code-line ></code-line>$colorName = $faker-&gt;colorName;//随机色名称
</code-pre></pre></code-box>

</div>
<h3><code>Faker\Provider\File 文件</code></h3>
<div>

<code-box ><code-line ></code-line>$fileExtension = $faker-&gt;fileExtension;//文件后缀
<code-line ></code-line>$mimeType = $faker-&gt;mimeType;//mime类型
<code-line ></code-line>// 将一个随机文件从源文件复制到目标目录，并返回fullpath
<code-line ></code-line>$file = $faker-&gt;file($sourceDir = './up1', $targetDir = './up2');
<code-line ></code-line>// 将一个随机文件从源文件复制到目标目录，并返回basename
<code-line ></code-line>$file = $faker-&gt;file($sourceDir = './up1', $targetDir = './up2', false);
</code-pre></pre></code-box>

</div>
<h3><code>Faker\Provider\Image 图片</code></h3>
<div>

<code-box ><code-line ></code-line>$imageUrl = $faker-&gt;imageUrl();//https://lorempixel.com/640/480/?93028
<code-line ></code-line>$imageUrl = $faker-&gt;imageUrl(320, 320, 'cats');//https://lorempixel.com/320/320/cats/?68416
<code-line ></code-line>$imageUrl = $faker-&gt;imageUrl(320, 320, 'cats', true, 'Faker');//https://lorempixel.com/320/320/cats/Faker/?68118
<code-line ></code-line>$imageUrl = $faker-&gt;imageUrl(320, 320, 'cats', true, 'Faker', true);//https://lorempixel.com/gray/320/320/cats/Faker/?28732
<code-line ></code-line>
<code-line ></code-line>//生成图片并保存到本地 '/tmp/13b73edae8443990be1aa8f1a483bc27.jpg'
<code-line ></code-line>$image = $faker-&gt;image('./tmp', 320, 320);
<code-line ></code-line>//设置类别并生成图片保存到本地  'tmp/13b73edae8443990be1aa8f1a483bc27.jpg'
<code-line ></code-line>$image = $faker-&gt;image('./tmp', 320, 320, 'cats');
<code-line ></code-line>//设置类别并生成图片保存到本地，只返回文件名 '13b73edae8443990be1aa8f1a483bc27.jpg'
<code-line ></code-line>$image = $faker-&gt;image('./tmp', 320, 320, 'cats', false);
<code-line ></code-line>// 生成没有随机化的图像
<code-line ></code-line>$image = $faker-&gt;image('./tmp', 320, 320, 'cats', true, false);
<code-line ></code-line>//生成图片并加上水印字体  'tmp/13b73edae8443990be1aa8f1a483bc27.jpg'
<code-line ></code-line>$image = $faker-&gt;image('./tmp', 320, 320, 'cats', true, true, 'Faker');
</code-pre></pre></code-box>

</div>
<h3><code>Faker\Provider\Uuid UUID</code></h3>
<div>
<code-box ><code-line ></code-line>$uuid = $faker-&gt;uuid;//生成一个uuid
</code-pre></pre></code-box>
</div>
<h3><code>Faker\Provider\Barcode 条形码</code></h3>
<div>
<code-box ><code-line ></code-line>$ean13 = $faker-&gt;ean13;//8105964964473
<code-line ></code-line>$ean8 = $faker-&gt;ean8;//05994441
<code-line ></code-line>$isbn13 = $faker-&gt;isbn13;//9780971408739
<code-line ></code-line>$isbn10 = $faker-&gt;isbn10;//0813387299
</code-pre></pre></code-box>
</div>
<h3><code>Faker\Provider\Miscellaneous 各种各样的</code></h3>
<div>

<code-box ><code-line ></code-line>$boolean = $faker-&gt;boolean;//生成一个布尔值
<code-line ></code-line>$md5 = $faker-&gt;md5;//生成一个md5码
<code-line ></code-line>$sha1 = $faker-&gt;sha1;//生成一个sha1
<code-line ></code-line>$sha256 = $faker-&gt;sha256;//生成一个sha256
<code-line ></code-line>$locale = $faker-&gt;locale;//生成一个地区编码：如zh_CN
<code-line ></code-line>$countryCode = $faker-&gt;countryCode;//生成一个国家编码。如：UK
<code-line ></code-line>$languageCode = $faker-&gt;languageCode;//生成一个语言编码.如：en
<code-line ></code-line>$currencyCode = $faker-&gt;currencyCode;//生成一个货币代码.如：EUR
<code-line ></code-line>$emoji = $faker-&gt;emoji;//生成一个emoji表情
</code-pre></pre></code-box>

</div>
<h3><code>Faker\Provider\Biased&nbsp;偏向的</code></h3>
<div>
<code-box ><code-line ></code-line>//得到10到20之间的随机数，并且更多机会接近20
<code-line ></code-line>$biasedNumberBetween = $faker-&gt;biasedNumberBetween($min = 10, $max = 20, $function = 'sqrt');
</code-pre></pre></code-box>
</div>
<h3><code>Faker\Provider\HtmlLorem html文本</code></h3>
<div>
<code-box ><code-line ></code-line>//生成不超过2级深度的HTML文档，并且在任何级别上都不超过3个元素。
<code-line ></code-line>$randomHtml = $faker-&gt;randomHtml(2, 3);
</code-pre></pre></code-box>
</div>
<h2 >Language specific formatters&nbsp;特定于语言的格式器</b></h2>
<h3><code>Faker\Provider\zh_CN\Payment</code></h3>
<div>
<code-box ><code-line ></code-line>// 生成一个随机的银行名称(基于真实的中国银行的列表)
<code-line ></code-line>echo $faker-&gt;bank; // '中国建设银行'
</code-pre></pre></code-box>
</div>
<h3><code>Faker\Provider\zh_TW\Person</code></h3>
<div>
<code-box ><code-line ></code-line>// Generates a random personal identify number
<code-line ></code-line>echo $faker-&gt;personalIdentityNumber; // A223456789
</code-pre></pre></code-box>
</div>
<h3><code>Faker\Provider\zh_TW\Company</code></h3>
<div>
<code-box ><code-line ></code-line>// Generates a random VAT / Company Tax number
<code-line ></code-line>echo $faker-&gt;VAT; //23456789
</code-pre></pre></code-box>
</div>
</div>
</div>  
</div>

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
.subjecta{
    background-color: #dad;
}
.subjectb{
    background-color: #bbb;
}
    
</style>