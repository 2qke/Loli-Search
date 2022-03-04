<?php
require 'php/istemci.php';
session_start();
?>
<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anime Search</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/mdb.min.css" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Quicksand:wght@300&family=Zen+Kaku+Gothic+Antique:wght@300&display=swap" rel="stylesheet">



</head>
<body style="background-color: #333333">

<div class="offcanvas offcanvas-end" style="max-width: 300px" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <style>
        ::-webkit-scrollbar {
            width: 4px;
            color: #3c3c3c;

        }
    </style>
    <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel">Kontrol Panel</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="offcanvas-body">
        <br>
        <select class="form-select mb-3" aria-label="Default temalar">
            <option selected disabled>Temalar</option>
            <option value="1">Aydınlık</option>
            <option value="2">Karanlık</option>
            <option value="3">Gece</option>
        </select>
        <select class="form-select mb-3" aria-label="Disabled diller" disabled>
            <option selected disabled>Diller</option>
            <option value="1">Aydınlık</option>
            <option value="2">Karanlık</option>
            <option value="3">Gece</option>
        </select>
        <br>
        <a class="btn btn-outline-info mb-3" data-ripple-color="dark" href="#">Ayarlar</a><br>
        <a class="btn btn-outline-secondary mb-3" data-ripple-color="dark" href="#">Hakkımızda</a>
        <a class="btn btn-outline-primary mb-3" data-ripple-color="dark" href="#">Manifesto'muz</a>
        <a class="btn btn-outline-success mb-3" data-ripple-color="dark" href="#">Güncelleme notları</a><br>
        <hr class="ince">
        <div class="col-md-12">
            <h3 class="text-center fontlu">Loli Search</h3>
            <p class="text-center">Loli Search'te aramalarınız kaydedilmez. Kimse sizin kim olduğunuzu bilemez. Loli S. ile tamamen anonim olarak internetin sınırlarını keşfedebilirsiniz!</p>
        </div>
        <div class="dropdown">
            <hr class="ince">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="images/developer.jpg" alt="" width="32" height="32" class="rounded-circle me-2">
                <h5 class="text-black mb-3" style="margin-top: 5px">Developer: Aikaiz3L</h5>
            </a>
            <small class="text-black">İletişim adrressleri için tıklayın</small>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1" style="">
                <li><a class="dropdown-item" href="#">Discord: Aikaiz3L#3200</a></li>
                <li><a class="dropdown-item" href="#">İnstagram: yasinsan__</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container">
    <div class="row d-flex justify-content-center align-items-center" style="margin-top: -40px">
            <img src="images/loli.png" class="img-fluid mb-3" style="max-width: 250px; max-height: 250px;"><br>
            <div class="col-md-6">
                <div class="form">
                    <form method="get" action="sonuc.php">
                        <i class="bi-search" style="margin-top: 5px;"></i>
                        <input type="text" class="form-control form-input" id="inputValue" value="<?php $q = $_GET['q']; echo $q;?>" aria-label="Search" aria-describedby="basic-addon2" name="q" placeholder="Herhangi birşey aratın...">
                        <span class="sol-taraf">
                                <a href="#" class="text-black" data-mdb-container="body" data-mdb-toggle="popover" data-mdb-placement="right" data-mdb-trigger="focus" data-mdb-content="Sayın kullanıcımız bu özellik şuanda kullanılmamaktadır"><i class="bi-mic"></i></a>
                        </span>
                    </form>
                </div>
            </div>
        </div>
        <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab2" role="tablist" style="margin-top: 30px">

            <li class="nav-item" role="presentation">

                <button
                    class="nav-link active"
                    id="pills-home-tab2"
                    data-mdb-toggle="pill"
                    data-mdb-target="#pills-home2"
                    type="button"
                    role="tab"
                    aria-controls="pills-home"
                    aria-selected="true"
                >
                    Web
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button
                    class="nav-link"
                    id="pills-profile-tab2"
                    data-mdb-toggle="pill"
                    data-mdb-target="#pills-profile2"
                    type="button"
                    role="tab"
                    aria-controls="pills-profile"
                    aria-selected="false"
                >
                    Görsel
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button
                    class="nav-link"
                    id="pills-contact-tab2"
                    data-mdb-toggle="pill"
                    data-mdb-target="#pills-contact2"
                    type="button"
                    role="tab"
                    aria-controls="pills-contact"
                    aria-selected="false"
                >
                    Bilgi
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button
                    class="nav-link"
                    id="pills-contact-tab2"
                    data-mdb-toggle="pill"
                    data-mdb-target="#pills-contact3"
                    type="button"
                    role="tab"
                    aria-controls="pills-contact"
                    aria-selected="false"
                >
                    Anime
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button
                    class="nav-link"
                    id="pills-contact-tab2"
                    data-mdb-toggle="pill"
                    data-mdb-target="#pills-contact4"
                    type="button"
                    role="tab"
                    aria-controls="pills-contact"
                    aria-selected="false"
                >
                    Akademi
                </button>
            </li>
        </ul>

        <div class="tab-content" id="pills-tabContent2">
            <div
                    class="tab-pane fade show active"
                    id="pills-home2"
                    role="tabpanel"
                    aria-labelledby="pills-home-tab2"
            >
                <div class="card text-white mb-3" style="background-color: #3c3c3c;">
                    <?php
                    $card_wiki = $db->prepare("SELECT card_baslik, card_muted, card_text, card_image FROM tarayici_card_wiki ");
                    $card_wiki->execute(array($q));
                    $kontrol = $card_wiki->fetch(PDO::FETCH_ASSOC);
                    if ($kontrol > 0) {
                        $sorgu = "SELECT * FROM tarayici_card_wiki WHERE card_baslik = '$q'";
                        $sorgukontrol = $db->query($sorgu);
                        while ($cikti = $sorgukontrol->fetch(PDO::FETCH_ASSOC)){
                            echo '<div class="card-header">
                    <img src="'.$cikti['card_image'].'" class="rounded-1 f-right" style="max-width: 220px; max-height: 200px;"> 
                    <h1>'. $cikti['card_baslik'] .'</h1>
                    <h5 class="text-muted">'. $cikti['card_muted'] .'</h5>
                    <br>
                    <p style="max-width: 1010x;">'. $cikti['card_text'] .'...</p>
                    <a href="'. $cikti['card_link'] .'"><div class="btn btn-outline-white" style="border-radius: 100px;" data-ripple-color="dark">'. $cikti['card_kaynak'] .'</div>
                    </a>
                    
                </div>';
                        }
                    }else{
                        echo '<div class="card-header">
                    <h1 class="text-center">Opps! bir hata meydana geldi!</h1>
                </div>';
                    }
                    ?>
                </div>
                <div class="card text-white mb-3" style="background-color: #3c3c3c;">
                    <?php
                    $card_an = $db->prepare("SELECT user_card_title, user_card_muted, user_card_text, user_card_image, user_card_link, user_card_name, user_card_username FROM tarayici_card_anime_users ");
                    $card_an->execute(array($q));
                    $kontrol_an = $card_an->fetch(PDO::FETCH_ASSOC);
                    if ($kontrol_an > 0) {
                        $sorgu = "SELECT * FROM tarayici_card_anime_users WHERE user_card_title = '$q'";
                        $sorgukontrol = $db->query($sorgu);
                        while ($cikti = $sorgukontrol->fetch(PDO::FETCH_ASSOC)){
                            echo '<div class="card-header">
                    <img src="' . $cikti['user_card_image'] . '" class="rounded-1 f-right" style="max-width: 220px; max-height: 200px;"> 
                    <h1>' . $cikti['user_card_title'] . '</h1>
                    <h5 class="text-muted">' . $cikti['user_card_muted'] . '</h5>
                    <br>
                    <p style="max-width: 1010x;">' . $cikti['user_card_text'] . '...</p>
                    <a href="' . $cikti['user_card_link'] . '"><div class="btn btn-outline-white" style="border-radius: 100px;" data-ripple-color="dark">' . $cikti['user_card_name'] . '</div>
                    </a>
                    
                </div>';
                        }
                    }else{
                        echo '<div class="card-header">
                    <h1 class="text-center">Opps! bir hata meydana geldi!</h1>
                </div>';
                    }
                    ?>
                </div>
                <div class="col-md-12 text-center">
                    <?php
                    require 'php/anime_ekle.php';
                    ?>
                </div>
                <div class="card col-md-7 f-left" style="background-color: #3c3c3c; max-width: 750px;">
                    <div class="gcse-searchresults-only" style="margin-left: -6px;" id="GoogleImage" runat="server"></div>
                </div>
                <div class="card text-white f-right col-md-5" style="background-color: #3c3c3c">
                    <?php
                    $card_anime = $db->prepare("SELECT user_card_title, user_card_muted, user_card_text, user_card_image, user_card_link, user_card_name, user_card_username FROM tarayici_card_anime_users ");
                    $anime_sorgu = "SELECT * FROM tarayici_card_anime_users ORDER BY RAND() LIMIT 1";
                    $anime_sorgukontrol = $db->query($anime_sorgu);
                    while ($cikti = $anime_sorgukontrol->fetch(PDO::FETCH_ASSOC)) {
                        echo '<div class="card-header text-center text-white"><small>Random animeler (Ekleyen: ' . $cikti['user_card_username'] . ')</small></div>
                        <div class="card-header">
                       <img src="' . $cikti['user_card_image'] . '" class="rounded-1 f-right" style="max-width: 150px;"> 
                       <h1>' . $cikti['user_card_title'] . '</h1>
                       <h5 class="text-muted">' . $cikti['user_card_muted'] . '</h5>
                       <br>
                       <p>' . $cikti['user_card_text'] . '...</p>
                       <a href="' . $cikti['user_card_link'] . '"><div class="btn btn-outline-white" style="border-radius: 100px;" data-ripple-color="dark">' . $cikti['user_card_name'] . '</div></a>
                    </div><div class="btn-sm btn-outline-info text-center align-self-center" type="button" data-mdb-toggle="modal" data-mdb-target="#animeEkleModal" style="border-radius: 100px; max-width: 300px;" data-ripple-color="dark">Sizde sitenizden link koymak istermisiniz?</div>
';
                    }
                    ?>
                </div>
                
                <div class="card text-white f-right col-md-5" style="background-color: #3c3c3c;">
                    <div class="card-header text-center text-white"><small>Sponsor</small></div>
                    <?php


                    ?>
                </div>
            </div>
            <div
                    class="tab-pane fade"
                    id="pills-profile2"
                    role="tabpanel"
                    aria-labelledby="pills-profile-tab2"
            >
                Görsel kısmı
            </div>
            <div
                    class="tab-pane fade"
                    id="pills-contact2"
                    role="tabpanel"
                    aria-labelledby="pills-contact-tab2"
            >
                Bilgi kısmı
            </div>
            <div
                    class="tab-pane fade"
                    id="pills-contact3"
                    role="tabpanel"
                    aria-labelledby="pills-contact-tab2"
            >
                Film kısmı
            </div>
            <div
                    class="tab-pane fade"
                    id="pills-contact4"
                    role="tabpanel"
                    aria-labelledby="pills-contact-tab2"
            >
                Akademi kısmı
            </div>
        </div>
    </div>
    <div
            class="modal fade"
            id="animeEkleModal"
            data-mdb-backdrop="static"
            data-mdb-keyboard="false"
            tabindex="-1"
            aria-labelledby="staticBackdropLabel"
            aria-hidden="true"
    >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Anime ekle</h5>
                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <?php
                    if(isset($_SESSION['isim'])){
                        echo '<div class="card-body">
<ul class="nav nav-pills mb-3 justify-content-center" id="ex1" role="tablist">
                                  <li class="nav-item" role="presentation">
                                    <a
                                      class="nav-link active"
                                      id="ex1-tab-1"
                                      data-mdb-toggle="pill"
                                      href="#ex1-pills-6"
                                      role="tab"
                                      aria-controls="ex1-pills-1"
                                      aria-selected="true"
                                      >Anime Ekle</a
                                    >
                                  </li>
                                  <li class="nav-item" role="presentation">
                                    <a
                                      class="nav-link"
                                      id="ex1-tab-2"
                                      data-mdb-toggle="pill"
                                      href="#ex1-pills-7"
                                      role="tab"
                                      aria-controls="ex1-pills-2"
                                      aria-selected="false"
                                      >Varolan animeye link ekle</a
                                    >
                                  </li>
                                </ul>
                                
                                <div class="tab-content" id="ex1-content">
                                  <div
                                    class="tab-pane fade show active"
                                    id="ex1-pills-6"
                                    role="tabpanel"
                                    aria-labelledby="ex1-tab-1"
                                  >
                                <form method="post">
                                  <div class="row mb-4">
                                    <div class="col">
                                      <div class="form-outline">
                                        <input type="text" name="a_adi" id="form3Example1" class="form-control" />
                                        <label class="form-label" for="form3Example1">Anime Adı</label>
                                      </div>
                                    </div>
                                    <div class="col">
                                      <div class="form-outline">
                                        <input type="text" id="form3Example2" name="a_site" class="form-control" />
                                        <label class="form-label" for="form3Example2">Animenin yüklendiği site</label>
                                      </div>
                                    </div>
                                  </div>
                                
                                  <div class="form-outline mb-4">
                                    <input type="text" id="form3Example3" name="a_resim" class="form-control" />
                                    <label class="form-label" for="form3Example3">Anime resim url</label>
                                  </div>
                                
                                  <div class="form-outline mb-4">
                                    <input type="text" id="form3Example4" name="a_aciklama" class="form-control" />
                                    <label class="form-label" for="form3Example4">Anime Açıklama</label>
                                  </div>
                                  
                                  <div class="form-outline mb-4">
                                    <input type="text" id="form3Example4" name="a_yas" class="form-control" />
                                    <label class="form-label" for="form3Example4">Anime Yaş sınırı</label>
                                  </div>
                                  
                                  <div class="form-outline mb-4">
                                    <input type="text" id="form3Example4" name="a_link" class="form-control" />
                                    <label class="form-label" for="form3Example4">Anime linki</label>
                                  </div>
                                   <button type="submit" name="a" class="btn btn-outline-info f-left align-self-center" style="margin-right: 5px;">Ekle!</button>
                                    <button type="button" class="btn btn-outline-danger" data-mdb-dismiss="modal">Kapat</button><br>
                                    <small class="text-muted">Spam yapan hesaplar kapatılıcaktır!</small>
                                </div>
                             </form>
                                
                  <div class="tab-pane fade" id="ex1-pills-7" role="tabpanel" aria-labelledby="ex1-tab-2">
                     <form method="post">
                          <div class="form-outline mb-4">
                            <input type="text" name="l_site" id="form5Example1" class="form-control" />
                            <label class="form-label" for="form5Example1">Sitenizin Adı</label>
                          </div>

                          <div class="form-outline mb-4">
                            <input type="text" name="l_link" id="form5Example2" class="form-control" />
                            <label class="form-label" for="form5Example2">Anime Linki</label>
                          </div>
                         <button type="submit" name="l" class="btn btn-outline-info f-left align-self-center" style="margin-right: 5px;">Ekle!</button>
                        <button type="button" class="btn btn-outline-danger" data-mdb-dismiss="modal">Kapat</button><br>
                        <small class="text-muted">Spam yapan hesaplar kapatılıcaktır!</small>         
                     </form>
                  </div>
</div>';
                    }elseif(!isset($_SESSION['isim'])){
                        echo '<div class="card-body"><div class="alert alert-danger" role="alert">
                                  ANİME EKLEMENİZ İÇİN GİRİŞ YAPMANIZ GEREKMEKTEDİR!
                                </div></div>';
                    }
                ?>
            </div>
        </div>
    </div>
</div>
    <script>

    </script>
    <script async src="https://cse.google.com/cse.js?cx=89ecf14465e74f30b"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.1/moment.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
    <script src="js/mdb.min.js"></script>
</body>

