<!DOCTYPE html>
<html lang="en" class="lang-en">
<head>
<!--    <base href='http://www.webhek.com/apps/unitethelovers/'>-->
    <meta charset="utf-8"/>
    <title>一个内衣公司用HTML5制作的公益游戏：让爱做主</title>
    <meta name="description"
          content="这是一个内衣公司使用HTML5技术制作的公益游戏。曾获得Cutting Edge技术奖。游戏的主旨是反对印度国内存在的包办婚姻现象。内衣公司的游戏非常有内衣特色。但游戏中使用的技术还是让人佩服的，纯HTML5+JS，整个游戏有很好的互动性，值得游戏设计者学习。">
    <link href="/CSS/skinSo20180404.css" rel="stylesheet" type="text/css" />
    <meta name="viewport" content="width=1440, user-scalable=0, minimum-scale=0.1"/>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
    <meta property="og:title" content="让爱做主 - 解放他们的激情"/>
    <meta property="og:site_name" content="WebHek"/>
    <meta property="og:description" content=""/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="http://www.webhek.com/misc/unitethelovers"/>
    <meta property="og:image" content="http://www.webhek.com/misc/unitethelovers/content/image/og.jpg"/>
</head>
<body>
<div id='sharebar' style="position: absolute; top: -9999px; right: 20px;clip: rect(1px, 1px, 1px, 1px);"></div>
<div id="main">
    <div id="appLoader"><span id='loaderIntro'> 这是一个内衣公司使用HTML5技术制作的公益游戏。<br/>曾获得Cutting Edge技术奖。</span></div>
</div>
<script>window.josConfig = {
        "id": "Bj\u00f6rn Borg Nudeclear",
        "version": "0.2",
        "requires": {"firefox": 24, "msie": 10, "trident": 7, "chrome": 26, "safari": 6, "ios": 6},
        "fallbackURL": "fallback.php",
        "langURL": "content\/lang\/lang.%s.json",
        "defaultLang": "en",
        "WIDTH": 1440,
        "apiSiteInfoURL": "getSiteInfo.php",
        "apiPostScoreURL": "http:\/\/demo.webcollection.se\/dev\/tweetbot\/postScore.php?score=",
        "bjornBorgURL": "http:\/\/www.bjornborg.com\/",
        "soundPath": "content\/sound\/",
        "imagePath": "content\/image\/",
        "imagePreload": ["bg.jpg", "intro_loader.gif", "logo.png", "vignette.gif"],
        "soundPreload": ["music1", "music2"],
        "objects": [{
            "name": "background",
            "type": "static",
            "bg": "url(content\/image\/stage\/bg.jpg)",
            "width": 1357,
            "height": 509,
            "x": 0,
            "y": 120,
            "z": -1500,
            "rx": 0,
            "ry": 0,
            "rz": 0,
            "scale": 2.9,
            "ox": 678,
            "oy": 318
        }, {
            "name": "lights",
            "type": "static",
            "bg": "url(content\/image\/stage\/city_lights.gif)",
            "width": 1357,
            "height": 509,
            "x": 0,
            "y": 120,
            "z": -1500,
            "rx": 0,
            "ry": 0,
            "rz": 0,
            "scale": 2.9,
            "ox": 678,
            "oy": 318
        }, {
            "name": "ground",
            "type": "static",
            "bg": "url(content\/image\/stage\/ground.png)",
            "width": 1357,
            "height": 343,
            "x": 0,
            "y": 260,
            "z": -60,
            "rx": 80,
            "ry": 0,
            "rz": 0,
            "scale": 2,
            "ox": 678,
            "oy": 249
        }, {
            "name": "hedge",
            "type": "static",
            "bg": "url(content\/image\/stage\/hedge.png)",
            "width": 806,
            "height": 44,
            "x": 350,
            "y": 150,
            "z": -250,
            "rx": 0,
            "ry": 0,
            "rz": 0,
            "scale": 1.8,
            "ox": 403,
            "oy": 22
        }, {
            "name": "grass",
            "type": "static",
            "bg": "url(content\/image\/stage\/grass.png)",
            "width": 326,
            "height": 66,
            "x": 570,
            "y": 260,
            "z": -100,
            "rx": 0,
            "ry": 0,
            "rz": 0,
            "scale": 1.2,
            "ox": 161,
            "oy": 66
        }, {
            "name": "wall",
            "type": "static",
            "bg": "url(content\/image\/stage\/wall.png)",
            "width": 367,
            "height": 512,
            "x": 800,
            "y": -50,
            "z": 0,
            "rx": 0,
            "ry": -80,
            "rz": 0,
            "scale": 1.2,
            "ox": 183,
            "oy": 256
        }, {
            "name": "car",
            "type": "static",
            "bg": "url(content\/image\/stage\/car.png)",
            "width": 526,
            "height": 202,
            "x": -480,
            "y": 140,
            "z": 100,
            "rx": 0,
            "ry": 0,
            "rz": 0,
            "scale": 1.5,
            "ox": 263,
            "oy": 101
        }, {
            "name": "glow",
            "type": "anim",
            "bg": "url(content\/image\/stage\/glow.png)",
            "width": 540,
            "height": 540,
            "x": 0,
            "y": 0,
            "z": -1,
            "rx": 0,
            "ry": 0,
            "rz": 0,
            "scale": 1,
            "ox": 270,
            "oy": 270
        }, {
            "name": "her1",
            "type": "sequenceLeft",
            "bg": "",
            "width": 97,
            "height": 141,
            "x": -556,
            "y": -82,
            "z": 0,
            "rx": 0,
            "ry": 0,
            "rz": 0,
            "scale": 1,
            "ox": 0,
            "oy": 0
        }, {
            "name": "her2",
            "type": "sequenceLeft",
            "bg": "",
            "width": 140,
            "height": 130,
            "x": -554,
            "y": -36,
            "z": 0,
            "rx": 0,
            "ry": 0,
            "rz": 0,
            "scale": 1,
            "ox": 0,
            "oy": 0
        }, {
            "name": "her3",
            "type": "sequenceLeft",
            "bg": "",
            "width": 503,
            "height": 390,
            "x": -500,
            "y": -150,
            "z": 0,
            "rx": 0,
            "ry": 0,
            "rz": 0,
            "scale": 1,
            "ox": 0,
            "oy": 0
        }, {
            "name": "him1",
            "type": "sequenceRight",
            "bg": "",
            "width": 295,
            "height": 194,
            "x": 144,
            "y": -46,
            "z": 0,
            "rx": 0,
            "ry": 0,
            "rz": 0,
            "scale": 1,
            "ox": 0,
            "oy": 0
        }, {
            "name": "him2",
            "type": "sequenceRight",
            "bg": "",
            "width": 191,
            "height": 145,
            "x": 66,
            "y": -70,
            "z": 0,
            "rx": 0,
            "ry": 0,
            "rz": 0,
            "scale": 1,
            "ox": 0,
            "oy": 0
        }, {
            "name": "him3",
            "type": "sequenceRight",
            "bg": "",
            "width": 392,
            "height": 351,
            "x": 62,
            "y": -110,
            "z": 0,
            "rx": 0,
            "ry": 0,
            "rz": 0,
            "scale": 1,
            "ox": 0,
            "oy": 0
        }, {
            "name": "end",
            "type": "sequenceEnd",
            "bg": "",
            "width": 558,
            "height": 434,
            "x": -302,
            "y": -193,
            "z": 0,
            "rx": 0,
            "ry": 0,
            "rz": 0,
            "scale": 1,
            "ox": 0,
            "oy": 0
        }, {
            "name": "barrel",
            "type": "static",
            "bg": "url(content\/image\/stage\/barrel.png)",
            "width": 125,
            "height": 78,
            "x": 180,
            "y": 250,
            "z": 1,
            "rx": 0,
            "ry": 0,
            "rz": 0,
            "scale": 1.3,
            "ox": 62,
            "oy": 78
        }, {
            "name": "flower",
            "type": "anim",
            "bg": "url(content\/image\/stage\/flower.png)",
            "width": 36,
            "height": 54,
            "x": 190,
            "y": 200,
            "z": 1,
            "rx": 0,
            "ry": 0,
            "rz": 0,
            "scale": 1.3,
            "ox": 8,
            "oy": 54
        }, {
            "name": "plant1",
            "type": "anim",
            "bg": "url(content\/image\/stage\/plant_1.png)",
            "width": 231,
            "height": 251,
            "x": -480,
            "y": 250,
            "z": 150,
            "rx": 0,
            "ry": 0,
            "rz": 0,
            "scale": 0.1,
            "ox": 50,
            "oy": 251
        }, {
            "name": "plant2a",
            "type": "anim",
            "bg": "url(content\/image\/stage\/plant_2a.png)",
            "width": 213,
            "height": 260,
            "x": -400,
            "y": 280,
            "z": 170,
            "rx": 0,
            "ry": 0,
            "rz": 0,
            "scale": 0.1,
            "ox": 116,
            "oy": 260
        }, {
            "name": "plant2b",
            "type": "anim",
            "bg": "url(content\/image\/stage\/plant_2b.png)",
            "width": 310,
            "height": 297,
            "x": -350,
            "y": 280,
            "z": 170,
            "rx": 0,
            "ry": 0,
            "rz": 0,
            "scale": 0.1,
            "ox": 155,
            "oy": 297
        }, {
            "name": "plant2c",
            "type": "anim",
            "bg": "url(content\/image\/stage\/plant_2c.png)",
            "width": 233,
            "height": 252,
            "x": -200,
            "y": 280,
            "z": 170,
            "rx": 0,
            "ry": 0,
            "rz": 0,
            "scale": 0.1,
            "ox": 116,
            "oy": 252
        }, {
            "name": "plant3",
            "type": "anim",
            "bg": "url(content\/image\/stage\/plant_3.png)",
            "width": 359,
            "height": 130,
            "x": -85,
            "y": 200,
            "z": 200,
            "rx": 0,
            "ry": 0,
            "rz": 0,
            "scale": 0.1,
            "ox": 179,
            "oy": 130
        }, {
            "name": "plant4",
            "type": "anim",
            "bg": "url(content\/image\/stage\/plant_4.png)",
            "width": 331,
            "height": 203,
            "x": 80,
            "y": 250,
            "z": 180,
            "rx": 0,
            "ry": 0,
            "rz": 0,
            "scale": 0.1,
            "ox": 165,
            "oy": 203
        }, {
            "name": "plant5",
            "type": "anim",
            "bg": "url(content\/image\/stage\/plant_5.png)",
            "width": 314,
            "height": 248,
            "x": 240,
            "y": 240,
            "z": 170,
            "rx": 0,
            "ry": 0,
            "rz": 0,
            "scale": 0.1,
            "ox": 157,
            "oy": 248
        }, {
            "name": "plant6",
            "type": "anim",
            "bg": "url(content\/image\/stage\/plant_6.png)",
            "width": 355,
            "height": 434,
            "x": 400,
            "y": 300,
            "z": 200,
            "rx": 0,
            "ry": 0,
            "rz": 0,
            "scale": 0.1,
            "ox": 355,
            "oy": 424
        }],
        "sequenceObjects": {
            "her1": {
                "sheets": [{"file": "sheet1.jpg", "mask": "sheet1.gif"}],
                "width": 97,
                "height": 141,
                "fps": 24,
                "columns": 52,
                "rows": 1,
                "totalFrames": 52,
                "loop": false,
                "path": "content\/image\/sequence\/her1\/",
                "prefix": "her1_",
                "downscale": 0.5,
                "in": 0.02,
                "out": 0.02
            },
            "her2": {
                "sheets": [{"file": "sheet1.jpg", "mask": "sheet1.gif"}],
                "width": 210,
                "height": 194,
                "fps": 20,
                "columns": 35,
                "rows": 1,
                "totalFrames": 35,
                "loop": false,
                "path": "content\/image\/sequence\/her2\/",
                "prefix": "her2_",
                "downscale": 0.75,
                "in": 0.35,
                "out": 0.35
            },
            "her3": {
                "sheets": [{"file": "sheet1.jpg", "mask": "sheet1.gif"}, {
                    "file": "sheet2.jpg",
                    "mask": "sheet2.gif"
                }, {"file": "sheet3.jpg", "mask": "sheet3.gif"}],
                "width": 503,
                "height": 390,
                "fps": 20,
                "columns": 15,
                "rows": 1,
                "totalFrames": 36,
                "loop": false,
                "path": "content\/image\/sequence\/her3\/",
                "prefix": "her3_",
                "downscale": 1,
                "in": 0.65,
                "out": 0.65
            },
            "him1": {
                "sheets": [{"file": "sheet1.jpg", "mask": "sheet1.gif"}],
                "width": 295,
                "height": 194,
                "fps": 20,
                "columns": 50,
                "rows": 1,
                "totalFrames": 50,
                "loop": false,
                "path": "content\/image\/sequence\/him1\/",
                "prefix": "him1_",
                "downscale": 0.75,
                "in": 0.2,
                "out": 0.2
            },
            "him2": {
                "sheets": [{"file": "sheet1.jpg", "mask": "sheet1.gif"}],
                "width": 286,
                "height": 217,
                "fps": 24,
                "columns": 47,
                "rows": 1,
                "totalFrames": 47,
                "loop": false,
                "path": "content\/image\/sequence\/him2\/",
                "prefix": "him2_",
                "downscale": 0.75,
                "in": 0.5,
                "out": 0.5
            },
            "him3": {
                "sheets": [{"file": "sheet1.jpg", "mask": "sheet1.gif"}, {
                    "file": "sheet2.jpg",
                    "mask": "sheet2.gif"
                }, {"file": "sheet3.jpg", "mask": "sheet3.gif"}],
                "width": 392,
                "height": 351,
                "fps": 24,
                "columns": 21,
                "rows": 1,
                "totalFrames": 63,
                "loop": false,
                "path": "content\/image\/sequence\/him3\/",
                "prefix": "him3_",
                "downscale": 1,
                "in": 0.85,
                "out": 0.85
            },
            "end": {
                "sheets": [{"file": "sheet1.jpg", "mask": "sheet1.gif"}, {
                    "file": "sheet2.jpg",
                    "mask": "sheet2.gif"
                }, {"file": "sheet3.jpg", "mask": "sheet3.gif"}, {
                    "file": "sheet4.jpg",
                    "mask": "sheet4.gif"
                }, {"file": "sheet5.jpg", "mask": "sheet5.gif"}, {
                    "file": "sheet6.jpg",
                    "mask": "sheet6.gif"
                }, {"file": "sheet7.jpg", "mask": "sheet7.gif"}, {"file": "sheet8.jpg", "mask": "sheet8.gif"}],
                "width": 558,
                "height": 434,
                "fps": 20,
                "columns": 12,
                "rows": 1,
                "totalFrames": 94,
                "loop": false,
                "path": "content\/image\/sequence\/end\/",
                "prefix": "end_",
                "downscale": 1,
                "in": 1,
                "out": 1
            }
        },
        "sequenceObjectsLow": {
            "her1": {
                "sheets": [{"file": "sheet1.jpg", "mask": "sheet1.gif"}],
                "width": 97,
                "height": 141,
                "fps": 12,
                "columns": 26,
                "rows": 1,
                "totalFrames": 26,
                "loop": false,
                "path": "content\/image\/sequence_low\/her1\/",
                "prefix": "her1_",
                "downscale": 0.5,
                "in": 0.02,
                "out": 0.02
            },
            "her2": {
                "sheets": [{"file": "sheet1.jpg", "mask": "sheet1.gif"}],
                "width": 210,
                "height": 194,
                "fps": 10,
                "columns": 18,
                "rows": 1,
                "totalFrames": 18,
                "loop": false,
                "path": "content\/image\/sequence_low\/her2\/",
                "prefix": "her2_",
                "downscale": 0.75,
                "in": 0.35,
                "out": 0.35
            },
            "her3": {
                "sheets": [{"file": "sheet1.jpg", "mask": "sheet1.gif"}, {
                    "file": "sheet2.jpg",
                    "mask": "sheet2.gif"
                }],
                "width": 503,
                "height": 390,
                "fps": 10,
                "columns": 15,
                "rows": 1,
                "totalFrames": 19,
                "loop": false,
                "path": "content\/image\/sequence_low\/her3\/",
                "prefix": "her3_",
                "downscale": 1,
                "in": 0.65,
                "out": 0.65
            },
            "him1": {
                "sheets": [{"file": "sheet1.jpg", "mask": "sheet1.gif"}],
                "width": 295,
                "height": 194,
                "fps": 10,
                "columns": 25,
                "rows": 1,
                "totalFrames": 25,
                "loop": false,
                "path": "content\/image\/sequence_low\/him1\/",
                "prefix": "him1_",
                "downscale": 0.75,
                "in": 0.2,
                "out": 0.2
            },
            "him2": {
                "sheets": [{"file": "sheet1.jpg", "mask": "sheet1.gif"}],
                "width": 286,
                "height": 217,
                "fps": 12,
                "columns": 24,
                "rows": 1,
                "totalFrames": 24,
                "loop": false,
                "path": "content\/image\/sequence_low\/him2\/",
                "prefix": "him2_",
                "downscale": 0.75,
                "in": 0.5,
                "out": 0.5
            },
            "him3": {
                "sheets": [{"file": "sheet1.jpg", "mask": "sheet1.gif"}, {
                    "file": "sheet2.jpg",
                    "mask": "sheet2.gif"
                }],
                "width": 392,
                "height": 351,
                "fps": 12,
                "columns": 21,
                "rows": 1,
                "totalFrames": 32,
                "loop": false,
                "path": "content\/image\/sequence_low\/him3\/",
                "prefix": "him3_",
                "downscale": 1,
                "in": 0.85,
                "out": 0.85
            },
            "end": {
                "sheets": [{"file": "sheet1.jpg", "mask": "sheet1.gif"}, {
                    "file": "sheet2.jpg",
                    "mask": "sheet2.gif"
                }, {"file": "sheet3.jpg", "mask": "sheet3.gif"}, {"file": "sheet4.jpg", "mask": "sheet4.gif"}],
                "width": 558,
                "height": 434,
                "fps": 10,
                "columns": 12,
                "rows": 1,
                "totalFrames": 47,
                "loop": false,
                "path": "content\/image\/sequence_low\/end\/",
                "prefix": "end_",
                "downscale": 1,
                "in": 1,
                "out": 1
            }
        },
        "animObjects": {
            "flower": {
                "in": 0.4,
                "out": 0.38,
                "from": {"rz": -45, "scale": 0.1},
                "fromTime": 120,
                "fromEase": "easeOut",
                "to": {"rz": 0, "scale": 1.3},
                "toTime": 120,
                "toEase": "easeOut"
            },
            "plant1": {
                "in": 0.85,
                "out": 0.83,
                "from": {"y": 250, "rz": -45, "ry": 50, "scale": 0.1},
                "fromTime": 180,
                "fromEase": "easeOut",
                "to": {"y": 150, "rz": 0, "ry": 0, "scale": 0.6},
                "toTime": 180,
                "toEase": "easeOut"
            },
            "plant2a": {
                "in": 0.65,
                "out": 0.63,
                "from": {"y": 250, "rz": -10, "ry": -35, "scale": 0.1},
                "fromTime": 180,
                "fromEase": "easeOut",
                "to": {"y": 230, "rz": 0, "ry": 0, "scale": 0.8},
                "toTime": 180,
                "toEase": "easeOut"
            },
            "plant2b": {
                "in": 0.67,
                "out": 0.65,
                "from": {"y": 250, "rz": -20, "ry": 35, "scale": 0.1},
                "fromTime": 180,
                "fromEase": "easeOut",
                "to": {"y": 270, "rz": 0, "ry": 0, "scale": 0.8},
                "toTime": 180,
                "toEase": "easeOut"
            },
            "plant2c": {
                "in": 0.69,
                "out": 0.67,
                "from": {"y": 250, "rz": -30, "ry": 10, "scale": 0.1},
                "fromTime": 180,
                "fromEase": "easeOut",
                "to": {"y": 270, "rz": 0, "ry": 0, "scale": 0.8},
                "toTime": 180,
                "toEase": "easeOut"
            },
            "plant3": {
                "in": 0.88,
                "out": 0.86,
                "from": {"y": 200, "rz": 30, "ry": 35, "scale": 0.1},
                "fromTime": 180,
                "fromEase": "easeOut",
                "to": {"y": 150, "rz": 0, "ry": 0, "scale": 0.6},
                "toTime": 180,
                "toEase": "easeOut"
            },
            "plant4": {
                "in": 0.75,
                "out": 0.73,
                "from": {"y": 250, "rz": 20, "ry": -40, "scale": 0.1},
                "fromTime": 180,
                "fromEase": "easeOut",
                "to": {"y": 180, "rz": 0, "ry": 0, "scale": 0.7},
                "toTime": 180,
                "toEase": "easeOut"
            },
            "plant5": {
                "in": 0.9,
                "out": 0.88,
                "from": {"y": 240, "rz": -45, "ry": -50, "scale": 0.1},
                "fromTime": 180,
                "fromEase": "easeOut",
                "to": {"y": 160, "rz": 0, "ry": 0, "scale": 0.7},
                "toTime": 180,
                "toEase": "easeOut"
            },
            "plant6": {
                "in": 0.8,
                "out": 0.78,
                "from": {"x": 400, "y": 300, "rz": 45, "ry": -40, "scale": 0.1},
                "fromTime": 180,
                "fromEase": "easeOut",
                "to": {"x": 450, "y": 180, "rz": 0, "ry": 0, "scale": 0.6},
                "toTime": 180,
                "toEase": "easeOut"
            },
            "glow": {
                "in": 1,
                "out": 0,
                "from": {"opacity": 0},
                "fromTime": 300,
                "fromEase": "easeOut",
                "to": {"opacity": 1},
                "toTime": 300,
                "toEase": "easeOut"
            }
        }
    };</script>
<script>window.josLang = {
        "facebookURL": "",
        "twitterMessage": "Take a stand for true love! Unite the couple on the screen to support the right to marry for love, not by force. http:\/\/unitethelovers.com",
        "logoTitle": "让爱做主",
        "logoText": "解放他们的激情",
        "introAboutTitle": "我们需要你的帮助",
        "introAboutText": "让相爱的人拥抱，支持为爱结合的权利，不要包办婚姻。<br\/>在印度，多达90%的婚姻都是包办婚姻或强迫婚姻。女孩如果想自己做主选择自己所爱的人，则会面对极高的暴力危险，甚至会失去生命。<br\/>让我们一起来保护这些相爱的人，用你的行动，给他们庇护，让相爱的人自主结合。",
        "introAboutButton": "继续",
        "introInstructionsText": {
            "desktop": "用手指摩擦你笔记本的触摸板，或用鼠标摩擦你的鼠标垫，以此来产生爱的能量，帮助这两位情侣结合。<br\/>不要停，让能量持续，他们会越来越靠近。",
            "touch": "用手指摩擦你的屏幕，以此产生爱的能量，帮助这两位相爱的人结合。<br\/>不要停，让能量持续，他们会越来越靠近。"
        },
        "introInstructionsButton": "开始产生能量",
        "worldEnergyIndicatorTitle": "这是一个内衣生产商使用HTML5技术制作的公益游戏。<br\/>曾获得Cutting Edge技术奖。",
        "statisticsButtonTitleShow": "显示控制仪表台",
        "statisticsButtonTitleHide": "隐藏控制仪表台",
        "howButtonTitle": "我们的宣告",
        "moreButtonTitle": "LOVE COMMANDOS",
        "howPanelTitle": "我们的宗旨",
        "howPanelText": {
            "desktop": "通过用你的手指的触摸，让相爱的人拥抱，支持为爱结合的权利。摩擦你的触摸板，帮助这两位相爱的人结合。通过你的行动帮助现实生活中真正的情侣，让他们逃脱折磨、威胁和暴力。让他们与相爱的人结合，拒绝包办婚姻。",
            "touch": "通过用你的手指的触摸，让相爱的人拥抱，支持为爱结合的权利。摩擦你的触摸板，帮助这两位相爱的人结合。通过你的行动帮助现实生活中真正的情侣，让他们逃脱折磨、威胁和暴力。让他们与相爱的人结合，拒绝包办婚姻。"
        },
        "morePanelTitle": "LOVE COMMANDOS",
        "morePanelText": {
            "desktop": "Love Commandos, a voluntary organization in India, provides shelter for love couples who want to marry for love instead of being married off by their parents. As Bj\u00f6rn Borg takes an active stand for love, we support Love Commandos and the right to be together, not by force but by love. Read more about <a href='http:\/\/lovecommandos.org\/' target='_blank'>Love Commandos<\/a>.",
            "mobile": "Love Commandos is a voluntary organization in India who provides shelter for love couples who want to marry for love instead of being married off by their parents. As Bj\u00f6rn Borg takes an active stand for love, we support Love Commandos and the right to be together, not by force but by love. Read more about <a href='http:\/\/lovecommandos.org\/' target='_blank'>Love Commandos<\/a>."
        },
        "statisticsChart1": "吸引力",
        "statisticsChart2": "热情度",
        "statisticsChart3": "摩擦力",
        "statisticsChart4": "全部爱的能量",
        "statisticsChart5": "今日能量",
        "statisticsChart6": "今日能量",
        "endScreenTitle": "干得漂亮！",
        "endScreenText": "你的能量已经奉献给了成全在印度生活的真正的情侣。",
        "endScreenButton": "再玩一次，成全更多的情侣。",
        "endScreenFacebookButton": "Share on facebook",
        "callToAction": {"desktop": "用手指摩擦你的触摸板", "touch": "用手指摩擦屏幕"}
    };</script>
<script src="lib/a.js"></script>
<script src="lib/b.js"></script>
<script src="lib/c.js"></script>
<div id="fb-root"></div>
<script src='/apps/js/jquery-1.7.2.min.js'></script>


<script type="text/javascript" src="http://v3.jiathis.com/code/jiathis_r.js?move=0&amp;btn=r5.gif"
        charset="utf-8"></script>

<script>  (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o), m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-2477810-34', 'auto');
    ga('send', 'pageview');</script>
<span id='pageendflag'></span></body>
</html>
