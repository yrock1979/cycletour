<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ひめじE-Bikeツアー</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header>
            <div class="header-left">
               <a href="https://serene-haibt-1736a6.netlify.app/"><img class="logo" src="assets/img/ACTlogo.jpg" alt="logo"></a>
            </div>
            <div class="header-right">
               <ul class="nav"> 
                   <li><a href="#about">About</a></li>
                   <li><a href="#tour">Tour</a></li>
                   <li><a href="#contact">Contact</a></li>
               </ul>
            </div>
    </header>

    <main>
        <section class="welcome">
            <h1 class="title">　姫路じてんしゃ旅　</h1>
            <ul class="guideline">
                <li>サイクルツアー</li>
                <li></li>
                <li>E-BIKES</li>
            </ul>
        </section>
    
        <section id="about">
            <h2>About</h2>
            <div class="contents">
                <p class="discription">
                    私達は、姫路の城下町をめぐるサイクリングツアー会社です。「かけがえのない思い出の1ページ」をテーマに、姫路の隠れスポットをE-Bikeで探検します。世界遺産の姫路城が唯一有名な姫路には、まだまだ知られていない観光スポットが星の数ほどあります。
                    歩くには遠すぎる、車では行きづらい、自転車ではちょっとキツすぎる、そんな隠れたルートをコースにし、E-Bikeで楽しみましょう！地域の素材を発信し、一人でも多くの方に姫路の魅力を伝えて行きたいのです。参加者の皆さんには、街の文化、歴史、人と触れ合い、自分だけのお気に入りの姫路を発見してもらい、人生をより豊かにしていただきたいです。
                    E-Bikeサイクリングアクティビティによって姫路の地域をもっと元気にする。それが私達の未来図です。
                </p>
                <img src="assets/img/shigou.jpg" alt="shigou">
                <img src="assets/img/shichifukujin.jpg" alt="shichifukujin">
            </div>
        </section>
        <section id="tour">
            <h2>Tour</h2>
            <div class="cards">
                <div class="card">
                    <h3 class="plan-name">歴史の通りみち　西国街道と船場城西の風景をめぐるショートサイクリング</h3>
                    <div class="only_img">
                        <div class="yoko">
                            <img class="img_yoko" src="assets/img/hontokuji.jpg" alt="hontokuji">
                        </div>
                        <div class="tate">
                            <img class="img_tate" src="assets/img/senhime1.jpg" alt="senhime1">
                            <img class="img_tate" src="assets/img/ichkawa.jpg" alt="ichkawa">
                        </div>
                    </div>
                    <p>京の都から中国地方へとつながる街道筋に栄えた古い町並み、伝統の姫路仏壇や老舗の味噌屋さんなど昔ながらの文化が息づく町を短時間でご案内。世界遺産姫路城が近いので、姫路城観光の前後の空いた時間に気軽にご参加いただけます。</p>
                </div>
                <div class="card">
                    <h3 class="plan-name">季節の花々が彩る夢前川　姫革クラフトとフルーツジャムづくり体験</h3>
                    <div class="only_img">
                        <div class="yoko">
                            <img class="img_yoko" src="assets/img/yumesakigawatoshinkansen.jpg" alt="yumesakigawatoshinkansen">
                        </div>
                        <div class="tate">
                            <img class="img_tate" src="assets/img/tannbomichi.jpg" alt="tannbomichi">
                            <img class="img_tate" src="assets/img/ichkawa.jpg" alt="ichkawa">
                        </div>
                    </div> 
                    <p>初春の菜の花、春の桜並木、初夏から夏にかけては芝桜や蓮の花など四季折々の花々の競演を楽しみながらのサイクリング。姫革細工の体験や近くの畑で栽培されるフルーツを使ったジャムづくり体験など盛りだくさんの一日です。</p>
                </div>
                <div class="card">
                    <h3 class="plan-name">楽々ヒルクライム　パワースポット広峯神社・増位山随願寺をめぐる</h3>
                    <div class="only_img">
                        <div class="yoko">
                            <img class="img_yoko" src="assets/img/masuiroad.jpg" alt="masuiroad">
                        </div>
                        <div class="tate">
                            <img class="img_tate" src="assets/img/shikama.jpg" alt="shikama">
                            <img class="img_tate" src="assets/img/sanzaemon.jpg" alt="sanzaemon">
                        </div>
                    </div>
                    <p>天平の昔から霊験あらたかな古社として廣峯山頂に鎮座する広峯神社、聖徳太子ゆかりの名刹である増位山随願寺、姫路の2大パワースポットへは標高200メートル超の山々の山頂を目指してヒルクライム。E-Bikeだから楽々爽快です。</p>
                </div>
            </div>
        </section>
        <section id="contact">
            <h2>Contact</h2>
            <form method="post" action="check.php">
            <div class="contact-wrap">
                <input type="text" name="name" placeholder="お名前">
                <input type="email" name="email" placeholder="メール">
                <textarea name="content" cols="30" rows="10"></textarea>
                <button type="submit">送信</button>
            </div>
        </section>
    </main>
    <footer>
        <div>株式会社あくと　TRAVEL NETWORK ACT
            <p></p> 
            <p>Copyright © Act co.ltd</p>
        </div>
    </footer>
</body>
</html>