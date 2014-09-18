<?php

    $lang = "zh-cn";

    $head = array(
        "title" => "CSS 禅意花园: CSS 设计之美",
        "description" => "探索纯 CSS 设计所能达到的各种视觉美。",

        // if you'd like translation credit, place it somewhere in this comment
        "comment" => "

    很荣幸您对此具有好奇心并感兴趣参与。
    View source is a feature, not a bug. Thanks for your curiosity and
    interest in participating!

    以下是经过改进的新版 csszengarden.com 作品投稿规则：

    - 允许使用 CSS3 么？必须可以！若有必要，请为对应浏览器加上前缀，以支持所有浏览器。
    - 使用响应式设计（根据不同尺寸屏幕，自主调节最适宜的展示方式）；在不同尺寸屏幕上测试你的布局。
    - 浏览器兼容性最低要求：IE9+，最新版 Chrome/Firefox/Safari，iOS/Android
    - 我们不仅接受适当的降级兼容，而且是高度鼓励这种行为。
    - 样式表中，应该使用 class 属性，拒绝使用 id 属性。
    - 使用 web 字体是非常酷的事情，但是在这之前请确认你是否有共享这些文件的授权。那些添加 CSS 就可以使用的字体（例如 Google 字体）在这里可以有效使用，但是大多数需要添加自定义 HTML 的字体是不被支持的。TypeKit 是可以使用的，具体使用步骤请参见 readme 文档：https://github.com/mezzoblue/csszengarden.com/

    这里是一些 CSS 小技巧：

    - :first-child，:last-child，:nth-child 可以获取没有 class 属性的元素
    - ::before 和 ::after 可以新建伪元素从而实现一些扩展样式效果
    - multiple background-image 支持多背景图层叠，无数量限制，并适用于任意元素
    - 若需要图片代替文字，请使用 Kellum 方法，详见：http://goo.gl/GXxdI
    - 请别依赖页面最下方所给出的 div 标签；请使用 ::before 和 ::after 取而代之。

    本翻译来自 炜哥David(david.shejio@gmail.com)，请指正。
        ",
    );


    $intro = array(
        "h1" => "CSS 禅意花园",
        "h2" => '<abbr title="Cascading Style Sheets">CSS</abbr> 设计之美',

        "summary-p1" => '探索纯 <abbr title="Cascading Style Sheets">CSS</abbr> 设计所能达到的各种视觉美。这里给出一份样式表清单，点击可载入对应样式表至本页。',
        "summary-p2" => '想参与作品投稿，请先下载以下示例文件： <a href="' . $zenUrls["example-html"] . '" title="本页的HTML源代码，请勿修改">html 文件</a> 和 <a href="' . $zenUrls["example-css"] . '" title="本页CSS样例，允许修改">css 文件</a>',

        "preamble-h3" => '悟途',
        "preamble-p1" => '那些过往的遗迹——各种浏览器专属标签、不兼容的 <abbr title="Document Object Model">DOM</abbr>、失效的 <abbr title="Cascading Style Sheets">CSS</abbr>、过时的浏览器等——零星散落于昏暗而荒芜之路上。',
        "preamble-p2" => '而此刻，我们必须摒弃一切过时的思想。感谢 <abbr title="World Wide Web Consortium">W3C</abbr>、<abbr title="Web Standards Project">WaSP</abbr> 以及当今主流浏览器的开发者们的不懈努力，Web 设计进入了全新的悟途。',
        "preamble-p3" => 'CSS 禅意花园邀请您释放身心，冥想大师们的重要命题。用智慧之眼看清真相，尝试以崭新又充满活力的方式使用那些经过时间沉淀的技术，以达天人合一。',
    );


    $main = array(
        "explanation-h3" => "这是什么项目？",
        "explanation-p1" => '我们需要不断展示 <abbr title="Cascading Style Sheets">CSS</abbr> 的力量. 禅意花园致力于兴趣推广、创意激发和鼓励 CSS 的使用和参与。想参与我们，你可以先从浏览列表里现存的设计开始。点击列表中任一项，就可以载入对应的样式表至本页。其中，<abbr title="HyperText Markup Language">HTML</abbr> 代码将保持不变，唯一改变的是对应的 <abbr title="Cascading Style Sheets">CSS</abbr> 代码。是的，这是真的。',
        "explanation-p2" => '<abbr title="Cascading Style Sheets">CSS</abbr> 允许对超文本文档的样式进行全面而完整的控制。通过让人们激动的方式来说明这一点的唯一方法，是把控制的缰绳交到那些有能力从结构中创造美的人手上，来展示 CSS 的本质。许多设计师和开发者都曾为 Web 之美做出了贡献，我们仍可以走的更远。',

        "participation-h3" => "参与方式",
        "participation-p1" => '稳健的视觉设计总是我们所关注的。你若要修改本页面，自然必须具备扎实的 <abbr title="Cascading Style Sheets">CSS</abbr> 技能。不过我们的样例文件已经加上了详尽的注释说明，就算是 <abbr title="Cascading Style Sheets">CSS</abbr> 初学者都可以上手。详见：<a href="' . $zenUrls["zen-resources"] . '" title="CSS相关资源清单"><abbr title="Cascading Style Sheets"> CSS </abbr> 资源指南</a>，里面有 <abbr title="Cascading Style Sheets">CSS</abbr> 相关的进阶教程和技巧提示。',
        "participation-p2" => '你可以用任何你希望的方法来修改样式表，但是请勿修改 <abbr title="HyperText Markup Language">HTML</abbr> 源码。若你是第一次这么做，或许会心生畏惧，不过你可以参照列表进行深入学习，并且使用示例文件作为参考指南。',
        "participation-p3" => '请下载 <a href="' . $zenUrls["example-html"] . '" title="本页的HTML源代码，请勿修改。">HTML</a> 和 <a href="' . $zenUrls["example-css"] . '" title="本页CSS样例，允许修改。">CSS</a> 范例文件，并在本地电脑上修改. 当你完成你的杰作后（请勿拿半成品投稿），请将您的 <abbr title="Cascading Style Sheets">CSS</abbr> 文件上传到你的 Web 服务器上，并将所有相关的文件打包成压缩文件，<a href="' . $zenUrls["zen-submit"] . '" title="请用该联络表单发送你的 CSS 文件给我们">发送链接给我们</a>。若采用您的作品，我们会将其下载并放在我们的服务器上。',

        "benefits-h3" => "获益",
        "benefits-p1" => '你为什么要参加这项计划呢？因为它可以展现你的实力，激发你的灵感，并作为展示 <abbr title="Cascading Style Sheets">CSS</abbr> 惊人效果的参考资源。本站为当前web工作者提供灵感，为初学者提供学习工具，并陈列我们所期待的未来的技术。',

        "requirements-h3" => "要求",
        "requirements-p1" => '希望您尽可能的使用 <abbr title="Cascading Style Sheets, levels 1 and 2">CSS 1 &amp; 2</abbr> 。 <abbr title="Cascading Style Sheets, levels 3 and 4">CSS 3 &amp; 4</abbr> 仅限使用已被广泛支持的内容，或者在浏览器不支持时提供对应的后备方案。CSS 禅意花园关注的是实用、可行的 <abbr title="Cascading Style Sheets">CSS</abbr> 语法，而并非只能被2%大众浏览的高端技巧。我们真正意义上的唯一要求是你的 <abbr title="Cascading Style Sheets">CSS</abbr> 有效。',
        "requirements-p2" => '幸运的是，这样的设计可以展示目前各种浏览器对 <abbr title="Cascading Style Sheets">CSS</abbr> 的支持有多完善。若你遵守指导方针，你应该会在大多数的现代浏览器上看到相当一致的效果。由于当前网络上用户端种类繁多，尤其考虑上可移动设备，因此要达到所有平台通用的像素级的精准布局不太可能。这没关系，只要尽可能多的测试兼容性就够了。你的设计应该至少在 IE9+ 和最新版的 Chrome、Firefox、iOS 和 Android 浏览器上正常工作（超过90%以上的使用者）',
        "requirements-p3" => '我们要求你提交的是原创作品。请遵守著作权法规。请尽可能不使用具有争议性的素材，并尝试纳入独特而有趣的视觉题材于你的作品中；我们并不需要另一个和花园有关的设计。',
        "requirements-p4" => '这是一个范例，同时又是一个学习练习。你可以保留图片的完整著作权（有限的例外情况，请参见 <a href="' . $zenUrls["zen-guidelines"] . '">投稿方针</a>），但是我们要求你使用 <a href="' . $zenUrls["zen-license"] . '" title="查看禅意花园的许可信息。">与本站相同</a>的知识共享授权公开发布你的 <abbr title="Cascading Style Sheets">CSS</abbr> 作品，以便他人可以从中学习。',
        "requirements-p5" => '由 <a href="' . $zenUrls["zen-credits-creator"] . '">Dave Shea</a> 提供。带宽由 <a href="' . $zenUrls["zen-credits-hosting"] . '">mediatemple</a> 友情赞助。<a href="' . $zenUrls["zen-credits-book"] . '">禅意花园之书</a>，火热发行中。',
    );

    // if you decide to localize any of these, keep the link text <4 characters if possible
    // some older designs assume the longest one in the group was 'XHTML'
    $footer = array(
        "zen-validate-html-title" => "检查本站的HTML有效性",
        "zen-validate-html-text" => "HTML",
        "zen-validate-css-title" => "检查本站的CSS有效性",
        "zen-validate-css-text" => "CSS",
        "zen-license-title" => "查看本站的知识共享许可：署名-非商用-相同方式共享",
        "zen-license-text" => "CC",
        "zen-accessibility-title" => "阅读本站可访问性说明",
        "zen-accessibility-text" => "A11y", // a-ccessibilit-y, the middle part is 11 characters. get it?
        "zen-github-title" => "在 Github 上 Fork 本站",
        "zen-github-text" => "GH",
    );

    $sidebar = array(
        "design-selection-h3" => "选择一项设计",
        "design-selection-by" => "by",

        "design-archives-h3" => "归档：",
        "design-archives-next" => "下一个设计",
        "design-archives-previous" => "上一个设计",
        "design-archives-viewall-title" => "浏览禅意花园上所有投稿",
        "design-archives-viewall-text" => "浏览所有设计",

        "design-resources-h3" => "资源：",
        "view-css-title" => '查看当前设计的CSS源代码',
        "view-css-text" => '查看该设计的 <abbr title="Cascading Style Sheets">CSS</abbr>',
        "css-resources-title" => '链接到提供CSS相关资料的优秀站点',
        "css-resources-text" => '<abbr title="Cascading Style Sheets">CSS</abbr> 资源',
        "zen-faq-title" => '禅意花园常见问题列表',
        "zen-faq-text" => '<abbr title="Frequently Asked Questions">FAQ</abbr>',
        "zen-submit-title" => '提交你自己的 CSS 文件',
        "zen-submit-text" => '设计投稿',
        "zen-translations-title" => '浏览该页翻译',
        "zen-translations-text" => '翻译',
    );

    $foot = array(
        "comment" => "
    这些多余的 div/span 标签原本是设计用来添加额外的图片的。
    如今，我们已经有了完整的 ::before 和 ::after 支持，请使用这些作为代替。
    这些元素仅作为历史设计的兼容之用。终有一天，他们将消失殆尽。
        ",
    );


?>
