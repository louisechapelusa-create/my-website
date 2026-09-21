<?php
// 1. 将你的 20 个链接放入数组
$redirectUrls = [
    /* Grupo 1: jQo5aNzQN--胖子8.23 */
    "https://td2rrgfxaf1z.gameworldhero.com/jQo5aNzQN",
    "https://e3jcfey93jvv.pixelbattlexx.com/jQo5aNzQN",
    "https://13lkm0bk5g08.gamingherozzz.com/jQo5aNzQN",
    "https://6f93byn2v9gc.arcadequestxx.com/jQo5aNzQN",
    "https://9ynjhg0lflga.playpixelzone.com/jQo5aNzQN",
    "https://rbtjzmojhw2i.battlequestxx.com/jQo5aNzQN",
    "https://glisfhxvhwgh.gamingworldzz.com/jQo5aNzQN",
    "https://80cv26au6zo8.gameplayquest.com/jQo5aNzQN",
    "https://smsplxefs2f8.arcadeforgezz.com/jQo5aNzQN",
    "https://ji9qyfl4d7hz.playheroarena.com/jQo5aNzQN",

    /* Grupo 2: sdalas3kpoj1--胖子8.24 */
    "https://8mnxkhk6trq8.gameworldhero.com/sdalas3kpoj1",
    "https://n4py8xlpa9ka.pixelbattlexx.com/sdalas3kpoj1",
    "https://hkkbcclnp19l.gamingherozzz.com/sdalas3kpoj1",
    "https://2q5hjfki30fh.arcadequestxx.com/sdalas3kpoj1",
    "https://co6lipabti2t.playpixelzone.com/sdalas3kpoj1",
    "https://2cx1c08hle2l.battlequestxx.com/sdalas3kpoj1",
    "https://o2pem1cz6y0y.gamingworldzz.com/sdalas3kpoj1",
    "https://u0zc099dk2si.gameplayquest.com/sdalas3kpoj1",
    "https://s4va583f9poz.arcadeforgezz.com/sdalas3kpoj1",
    "https://ag6fql0h13y5.playheroarena.com/sdalas3kpoj1"
];

// 2. 随机抽取一个链接
$selectedUrl = $redirectUrls[array_rand($redirectUrls)];

// 3. 执行标准的 HTTP 302 转向（类似 BeMob 后端跳转）
header("Location: " . $selectedUrl, true, 302);
exit();
?>
