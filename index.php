<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/styles.css">
    <title>Williams</title>
</head>

<body>
<header class="d-flex justify-content-center align-items-center" style="background-color: rgb(233, 233, 233);">
        <div class="navwid">
            <div class="d-flex justify-content-between mt-4 mb-3">
                <section>
                    Logo Section
                </section>
                <section class="d-flex align-items-center">
                    <section class="d-flex justify-content-center align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-geo-alt-fill iconadd" viewBox="0 0 16 16">
                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                        </svg>
                        <span class="headfont">
                            Address to school </br>location
                        </span>
                    </section>
                    <section class="d-flex justify-content-center align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-calendar-date-fill iconcal" viewBox="0 0 16 16">
                            <path
                                d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zm5.402 9.746c.625 0 1.184-.484 1.184-1.18 0-.832-.527-1.23-1.16-1.23-.586 0-1.168.387-1.168 1.21 0 .817.543 1.2 1.144 1.2z" />
                            <path
                                d="M16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-6.664-1.21c-1.11 0-1.656-.767-1.703-1.407h.683c.043.37.387.82 1.051.82.844 0 1.301-.848 1.305-2.164h-.027c-.153.414-.637.79-1.383.79-.852 0-1.676-.61-1.676-1.77 0-1.137.871-1.809 1.797-1.809 1.172 0 1.953.734 1.953 2.668 0 1.805-.742 2.871-2 2.871zm-2.89-5.435v5.332H5.77V8.079h-.012c-.29.156-.883.52-1.258.777V8.16a12.6 12.6 0 0 1 1.313-.805h.632z" />
                        </svg>
                        <span class="headfont">
                            Important information </br>for display
                        </span>
                    </section>
                </section>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light bg-white rounded-pill shadow m-2" style="cursor: pointer;">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-flex justify-content-between font-weight-bold" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active ml-3">
                            <a class="nav-link" id="home">HOME </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                NEWS
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="./pages/results.php">Results</a>
                                <a class="dropdown-item" href="./pages/news.php">Announcements</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./pages/aboutschool.php">ABOUT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./pages/applications.php">APPLICATIONS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./pages/gallery.php">GALLERY</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="teacherpanel">CONTACTS</a>
                        </li>
                        <?php
                            if(isset($_SESSION["name"])){
                                echo '
                                <li class="nav-item">
                                    <a class="nav-link" href="./pages/admindashboard.php">DASHBOARD</a>
                                </li>
                                ';
                            }
                            
                        ?>
                    </ul>
                    <ul class="navbar-nav mr-5">
                        <li class="nav-item mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook iconfb" viewBox="0 0 16 16">
                                <path
                                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                            </svg>
                        </li>
                        <li class="nav-item mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram iconinst" viewBox="0 0 16 16">
                                <path
                                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                            </svg>
                        </li>
                        <li class="nav-item mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter icontw" viewBox="0 0 16 16">
                                <path
                                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                            </svg>
                        </li>
                        <li class="nav-item mr-3">
                            <a href="./pages/login.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-fill" style="color: rgb(0, 0, 94);" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <div id="bodydiv">
        <div class="d-flex justify-content-center" style="background-color: rgb(233, 233, 233);">
            <div class="d-flex justify-content-center navwid">
                <div id="carouselExampleControls" class="carousel slide imagesize my-4" data-ride="carousel">
                    <div class="carousel-inner rounded-lg w-100 h-100">
                        <div class="carousel-item active">
                            <img src="https://www.unicef.org/tanzania/sites/unicef.org.tanzania/files/styles/large/public/UN0145551.jpg?itok=RZXur0m1" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://images.squarespace-cdn.com/content/v1/59ca7c1fb7411c50aa263115/1511816794960-QO0Z19OY4JVT9ZSI49AE/image-asset.jpeg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://opportunityeducation.or.tz/wp-content/uploads/2020/03/OETZ_3columnPhotos_1_ModernMethod.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center pb-5" style="background-color: rgb(233, 233, 233);">
            <div class="d-flex justify-content-between navwid container">
                <div class="card text-center border-dark" style="border-width: 2px; border-radius: 30px;">
                    <div class="card-header border-dark font-weight-bold" style="border-width: 2px;">
                        Latest News
                    </div>
                    <div class="card-body">
                        <ul class="text-left">
                            <li class="py-1">
                                There will be a grand opening</br>
                                soon enough
                            </li>
                            <li class="py-1">
                                There will be a grand opening</br>
                                soon enough
                            </li>
                            <li class="py-1">
                                There will be a grand opening</br>
                                soon enough
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer text-muted border-dark" style="border-width: 2px;">
                        All News | Calender
                    </div>
                </div>
                <div class="card border-dark" style="border-width: 2px; border-radius: 30px; width: 72%;">
                    <div class="card-header border-dark font-weight-bold text-center" style="border-width: 2px;">
                        Welcome to William Branham Primary School
                    </div>
                    <div class="card-body" style="height: fit-content;">
                        <div class="d-flex">
                            <div style="width: 300px; height:150px; margin-right: 20px;">
                                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYWFRgWFRYYGRgaGhoaGBgcHRgcGhwcGBoaGhgaGhocIS4lHB4sHxwaJjgnKy8xNTU1GiQ7QDs0Py40NTEBDAwMEA8QHhISHzQsJSs2NDQ0NDY0NDQ0NDQ0NDQ0NDQ0NDE0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NP/AABEIAMIBAwMBIgACEQEDEQH/xAAcAAAABwEBAAAAAAAAAAAAAAAAAgMEBQYHAQj/xABDEAACAAQEAwUFBgQEBAcAAAABAgADBBEFEiExBkFREyJhcYEyQpGhsQdScsHR8BQjYuEzgpLxFRZDUyRUorLC0tP/xAAZAQADAQEBAAAAAAAAAAAAAAABAgMABAX/xAAlEQACAgICAQUAAwEAAAAAAAAAAQIRITEDEkEEEyJRYTJxkRT/2gAMAwEAAhEDEQA/ANbECOCOxAoCBAgRjHY7BHcDUkDzgqT1PssD5ERjCsCAIEYwIMg1gsGl7wY7A9CsEmSlb2lU+YB+sHjhMWEIlsBpmZi0lCSQDptoNukJnhmSPYMxPwzHHyvaJKRM7zjoR8wIWzawrSNZELg0xRZKqcPxZX+oiQo0ZVyscxG7dfGHQhNOfnAaoKCmOGA0cMSY6CiO3gogXhBg0dgsdhkBnY7HI7DABAgQIwAQI5AjBOwIEcMYAIECBGCCBAgRjBRAgjvYwYIdzpGMdvHJjhVZmNgoJJ8oTaYv3hFR40xwpaQo0azOb625C0BvrljRi5OkQ2M1j1DnvEJfRddoZS6WYhupIPIgmH8h0RQzNYdYeS56tqDcRzd5PLO324rCJThjiFnbsZ3t+633rcj4xawYy9+7ORl3Drb4xpSTYrCVo5eSFPAvHQYSzw0xLElkIXblsOp6RTslkn1bwiSV4UjIp/Etezs8uYqrrZMoIt487xZ+C+Mmqy0qYgWaguSvssNri+oh48ibElCUdot8lbM/iR9IO7wgJhExhbdV/OFW8oYQUlm4gARyRtB4IRBo5Cc2bYmOLMuIg2WSDQCYrnFGIVKBFplBdnsSwJAUAkxVa3jqcXeQZNkVGDucy62sct+UKs6DVIs2OcZyJOZVYu9tMout+QLDaKA/2gTzM7jm4v3WtY666biKpJec00lVDA+z3rLrpoPCCVMzs51uxANwCSSxOutjfQXinVaFzVl+ovtEqpQcTpazDcZPcIB1N+ukWrhfjUVPadqiyVlhSXLjLdr903tY6RjSpMqZhTLkfdd8oty8iIksUVJaBLIz2sWb3gbWy8tDGdXQeuLPQSMCAQbg6gjYg7GOkxjXD/HdTT9mkxe0lKoXKF7wAOUZCupNuRvGxI1wDrqL6769RGFDwIDCwuYQp6tHJCsCRuOkZ4MLwDCBmNntbu238YULXuBvGAGgQhUVARQW12GkLK1xeME7AgQIxgqkZiTyF4quPY20wlJV1UaZ+Z8vCLKJQmBgSbMtvjzin1tHlnZAcyrzG97c4Tkk4xxpluCMZSd7RVK2nmmYi9o/eZRfMdLkC8WTG5aNOYqFHcWWS1iSF53PO5hKupgXTWxUhvgbw0ryzTmBS4vcE25i+kQU240jpfGlJMVxDDC8kKhysCNRva+vyh6lKV29kDS/teOsN6aYim1irdDHazEdCAYTSoes2EppN5yMfZDfPlFvEyIbB8PLqjsLD2h1PSJ9UEVhCVHNyyj2wKI0VPjqYSJaXtqWPjYf3i5qgip8cyFZEKEFw2ijcg76eG8PKL6iccl2RVsOlFUbNzvE39nWElaidO5ZQoA6k3P5fGKrT1Du4lIDmJyxov8Axamw6VLSaSC3MC5J3JMbii7tlPUSi40ifyHt2PLIv1aO4jXJKQu99thuY5huISpyCbKZWVgLEEX8j0PhFD47xYtP7JXsFAuB4xeUko2ckIOUqFZ32hupYLTXF9Dn1+FoicP49qFn3c5pbN3kIF1B+63h0MFwenSYpsQxG8R2P4cq6gfCJLkbOiXDGOjVaiZmAYc9Y5TvpaIvhasMyllO+py2J65Ta/yh/UVqIjO5AVQSTGUbdiN4orXG2NPLVJEoHtp+ZUYe6ALlvy9Yos3hqaGZ3mklwMwBuNtdDyvtFhoKs1uIo6kiUiEheRVtbnobgehiYxJgzkDYRpPpGxuOPeVMpFBw6EYHMSdLE30iwNhec3ZQfQa+sSUqRrEzIptNo51KUns7HCEFopf8GUdmVRqpAHIXFr+AisPg04zcr37Jj7VzZMx3HS5t8o1Kro4iqzDiyumYgMpXwF/Ew8ZOLJSjGStFTxOoWmCy5JDNYA5tGa+oZf0EXL7PeK3dxTTySxGeUzZizLqzAk7201iuf8qy5EtJs97iWrMwJ1Opsb/rDvCuKclTI7KVLdH/AJdxYMoLAd07i+kVi/o5pr7L5jeKklpaXAX2zYj0EReBOEmB+TafHaJ7iFgJbMANbctSNoj8GlI529mx9YnNS9zZaDj7TwWLNHAYJeEKmsRBd2Cjxi1nLVi7AHfWCT6gIt/lEQ/E1ODbOfPK1vpBajEEnD+U6k+JsdfA6wvZDqD8kVP49VWK9k+htyjsQtZKUOwtexgRH3Wdf/NH7NNpZTDU6eEQOI4c4mNMAuGOlvlEHw/xs1TUhStlCEgA31A1Pzic4g4g7CWhmAKxIJG4/CDzMdMlGUaZzRUoStUR82iSnVqmobUC6ryvyHiYgnxD+LUzjIKhBd7H3eo2MVbijj16gFVRQATkvr/mt1i3/ZaS9HMeaRkLZSTzCjvX9SYX21VLQXytO3lkTUYpKGiEk9NSYkOHsJepcEghAe8x+g8YlMI4Up3czJbky73y/QX6RLcW40mH0rMgAc9yWvViN/Ib+kLHh8safO2qRSsf4welrHlSirSUyrkPIgDNZotGBcTSakDKwD80O/p1jBqipLuSxuSSzHqSbn5w5pqxksVJHS28Uaa0SVPZufFfEyUsljnGcghF5lraaRQPs/4gkq86ZVTP5reyXO43IW/jyinYxOaevaMWLqLEm5uIYS6KYwBWW58lb9IKrbM1WEa5wAkt3nVLugGdggJGgve8U77RMfFTVFUa6IMqkbE+8R9PSKeVdTlbMvUHMvygst+8Tyg1g15NH+zrEHR2RWIVhe3jFwxqkkq5ctmmPYXbYW3tGd8FTLz1seWsXXFZgVlDgve9rmwXyEQb2isV8kxHh6jyFzfQsSDHcaCuGPTQWiPauKCxa8TnCxNplRMUmWo6aE9fECJxUmXm4or3DHE8/txQqisLlU1sb6nUnlvFq4l4dq5tA6BVacXDBVYaqGBIu1he19IpnFzzJdRLeUiic79omQXa9+6LDflGk8R8YpR06tNKmeyi0sHdra+S35x0wrZx8qakkinfZ9RMizWZcrqqo495SLix6EWMP5DEknxiM4YxZ2k1U9FTPPnA63yjuC+nmTApcRmq1piLbmVJ+NjyiPO7SSOj06abbLFTDWJeS8RdOQSCOcK1GIZNMpYxzwdZOjkXbA7qGhGZKzKRaEqfE2fQyvXMP0h/JmBuRB6GK7yRusFI4mw2c4UpNCoqkTU17yE97z8oiqankS62n7AK4d0IVibIqsQW05aZot3E9lluWBIym9ja4ttGdcNSGDyjkfRbC12YhiRy2GvTlFIPH9EuSKtfp6DrqJZq5W2veKvxNXysOpnYHvt7AO7Ny9IePVTzSAuCJul8qsDod7cjaKdMww4i96gTFVGKIx00t3jY6jXSKylG9ZJxhKqvBKcJcVzamQ8x0C5DlDA6MQLmw8LiILE6p5rlmaJKSkukRqOVmbLmbO1rtmNzt8PSK7WzyHsz5R4DWI8rqkjo4YLLZJU1IesOxRG+kPMHpyyBswZevOH5kWiVWVlJaIr+BPWBEnlPSBB6iWVOhn0uFv293dymVEuNb7k9NoqHFXGE+tY57Kl7qg2FvHnFZm1DNqxJPUm5hBpsdsY/Zxylkch9DeLJQ8XOtPIplVUko4M21y0y73bMeQ8IqGfWFZbaQzQt2btQ4hLoqk3cLInIGW50U8rdB+sZrx9xMaypLKf5Uu6yx1HNvX6CIrEMfebKly29xAl+ZA21iJJhIpqxnTp+aADvDuTDGY1okKddBBegx2WThOcEqEZkzgE3XrpE9jmL1bsxkIyKD3VVAfiSIgOF0JqEA3LAfGNUfDpvuuojll27YVlk4pZMwk4NWVSzXmLZpaZgGWzPe9wtuenzERT4JPGry2RObECwEa6kmsWagyoZRuHObvajQ2t1jO+MJtUjuk8uFNwl9FK30KkaHSGjKV1VA+NbOYXiMqklTDLs8x9Fcj2R4Re+AZ0rs2q6qYuZ+4gcg5VA7xA5XPyHjGIGefZvE/hVYBTut7OGuPERXr1yC1L46Ndk8FpMnvOZgZJa6IOfn0F+UMftG4qlU0g0kgr2jjKVX3EO5NtidhFPbj9pVP2dMzh3HfZ7EKbWJS97RQ5kxmLOxLMblmJJJJ5kmGWibj8t4LZgHEbypqTGUO6qVBe5IB5A8oYVyF5jznBmMxLEkXNydvACImgJY6epjSPs6qkE/s3sQ62BNjqNbRJ/FldxsVwjCJwoEaUVVc7NMY30Gi3AGrW10uIbyZVT2syW+RkW7JMJGqhSdCD7ZOUW87iL7jagIJSiy5iSBoOu0V2ZSWB/ZifJJJ1VlOKMmruhfhi7gBjsTY9QNjBuIJbhlyW7zZbk2APjEhhdIUOWw0Ah3WUSzFKn/YxJL8Kt5uymUVfVJPen7MFlY2Y3VCgUkzM2wFwANr5hrFpwisLjvKVPMEEfv0JgUNAyd3MSDEmkjLFHTqlRPV27IrGqfOUXqdfLxhPDsPRJ8t0UEuSC/vAC3sjYC30h1OmLnuxGVQb3210jtFTZb5Rl77MvKw5G3KFTuWAtJRdllmSc2zHbYgW+kUut4PrJjuwqERGNwoLn8hB8U4oWQ/ZzJ6K9gbEjYw7wfHDPJyTVYDcqb2jodN5RyJyiqTKkmGVEiodp7K7EMiZdbjUZiN9uXnEfjWG9qwzaaAaAcvAw7xGokPUOVYm757lybOABdDfui/KJqmpc7ZmN77xDkclLB28Si4Ux3gqMveygKwAyqMqiw3C8okmgSwFWwhpPqrGxg3SyL1t4HN4ERrYm3JbjlpAge4hvakZLxZws9Me0QFpLHQ81vyaIZ8FqOwNQZTCUCBnIsNTYWB1I8Y2P+IIuLZhvltf5Q4rAtTTPKZbLpmXa2Ug38BFlz34OeXp2vJgIhQNGv0/CVEuoRWPibwmHo0bJ2UvTQiwh3zREXA/syYPCktSxsoJ8ot/E1fJMwCVKRUUakAak7xDviajRRbrpaH7XoVxrZECQxfLbXe3lElIZSLbEbwgk+3zsfOFJDXgSNHBZeGReagBynOtj01EbS8zLa/OMQwIjt5Sk2vMXX8JvG1HW0SWwz8C+cGI3iHB0q6aZJawNrox9xhsYdCX3gb7X084LiUzJTzm0uEO8GxKfgy+RwBTgAvMdjqLiwUnwhGp4E+47r5i4+UWTD8VQWDypdhsczfS0PpJBN0qEQE3y3B9O9E3N+GdMYpbRm1fw4sqwdyWPQW+sN0lIqMhUsCQTty8Yv+KcKrOfO08n1Fh6CIocDpqRUO2v3RB7/bNS8IqSzFUkKgAMHpp5R1dCVZSCCORBuPSLPM4RUA2mG/iB84h5+EBD35yAeFyYKakHRps+vLpKdtC8tH8Lka/MQStmutigUkA77X5RAS+JJM1JcpLhpYyKxsA4A9kC9ydCfjDeor5qzsuR3VwpQiwA01U3O9wT6xGUX2K8bXWi14TjDtLN0/m2N1J7pb8dtvHfwiQoHmlc02WqNrcKxZT01IH0iEo5ziwMl99LWOvoYkJ1eyg3lOPC2vwMFJ1k0o08EzJfnCdTU6RBYXWu6uHUqVYgX0JG4uIVZmZgq3LMbAQrk9IygtsCVyJ2kx2ACAFiSvdHulgTcAnn4Q5xp2ainPLcqWlF0caEDLmB8DEN9oOEinkpPIDplEmel8pbM+dHDWOqvcbbNBKfH5M2hmJcq5klFQ3uSFIAU8+UWUFHZzym5ZRjs6Y89y7u7n7zXJsNo037JkRZdSykm1r6WtZbxnodwwRJboToAykMfQ7xccA4jl0UqbLnK3aTNlW2mlrseUWk/CJ1gcsktnsKVApHce9wQ2uYX5mLDhtL2S2XQdL7Rm0riNkeWi5nAAVQNTcmwUA2udhF4xyZUU+RXt3lUm3u35HyOkRnCTz4Ojj5IpU3knv44ARH1MgzTmzlbEEEdRyPUQ2paIuobOSTsLc+lotmEcOsQDONhyUbnzPKJxhKTpFJckYK2REvOAAGJHLuwItFRjNPIYytBksLdLgH84EW9hfZD/pl9FaTA7G4nq/QhTf5G0P6JEkZ3e73WxuLC3ManWFnRBr2T38LfrEJxDQPUFElq8tBfOSRc7WAAPnDqEYu0iL5JyVNkVjeP4eGIFLMZz/2yF+QaKfiXDrz3MyT3FOoViSw8yI0alwNJY7q3PMkAkwq8pV1Nh1vYQ9CoxqbgFUpsFzDqD+sITMGqBqZLelv1jVqvEZK65gfBdYhqvHEHsoPNj+UK5UUUUzNmpJi7ow9IcUctuat8DFpmYoGOoHoIazsTXa4HmRA7Sfg1RXkQanYqGtlykanQgE6m3gI26gA7NLHMMos3XTeMExGufMUDAKQL2GusSeE49WImRJ7BVGl7Gw5AXEK41lmfy0bmBDTGQv8NNzbWH1jKP8AnSvQf4iN+JQfoRFxqcRedg/bTSM7kXyiw9uw0hXpgSakrGMujkvpoTbkYVbB0P3tIq1G5BFjtErTVM1yAj2HNidB13jjcX4O5NHKic0ueZSAnuqfHvcrCC1eMmUyoxJc7qNAt/vW5+EMsaxZEm3lktMICtMOgAA9xeRPU+lork2ZmcsTrf8A2jvUYdUks1l/pwru5NyeLwvwf4xj013IVrILgAc7cz1is1U1ydWJiRmQyqUsYMUkGVsaCeylSCQVNwRyI1vGwfwTrLldqRmeWjm3us6glbRleEUHbVMqTyeYin8JYZvlePQmL4TnvpoQMh6WGg9IPJHtHGwcc+ss6IPD2qAABlNudyPyiYlBicz2J+P1jPabi0I5SYGR0YoynkymxFxuImabihprCXIltMci4Ud0Ac2ZjsovqY5FGadNHa5xauywzmu1kGrGwHUxZMGwkShmbvOdzyHgIbcP4J2f82YwmTWG49hAd1ljkOpNyeuwhXjDEjT0c2YpswXKp6M5Cg+l7+kdXHxKPyezi5OZy+K0Z79pPFazGNMgBRGBdjrdl6eAMUeTVn+5/ekRVVNJcL1Ov1MPHNgB6mBJXseGFSJaXVk6HUfvaIPHqAg9opJVjv0PQ/l+7vVawuTp+9odypoZSrAFSLEQi+LtDtdlQv8AZnh0lHevqmCSacgKW96aw0sOZAO3Vh0jTEq5OKIVVCig3VyVz6f0DkfOMPxl5qKlOzkyUu8pdALuTdjYate419LXiSwbEWIDISrrZbKSrMQBrpsItKWL8EI8dyaumbjg9JKp3CW1NgjtuTzFth6RYZs0IrMxACgkk6AAbkmPP+LYk2QO8xxMGxV2Oo2O9gw8NIi8e4zrKxVlzZv8tQLqoyhiOb29o/LwjQlawqBycbTy7Fcfxdp9RNm5jZnJHkNF+QECKlMqDc6wIPQ3Y22ZwVUpf+Gr5pHRyxPqQfyiLqJGMSD7bTB/Tkc28iAY00yxvaGNfKmBR2OVjmGYOdMvOx5GFdAUmZfN4sqShV2dXF7jLlOnW4iAq8cd/bc/5mvGi/aRhaTKBp8oZXlEFrGxylrOD16xhRMGMb2aU34LBMxgX9o+m0NZ+L/dGvU6xEgQrTyGdgiglmICgcydAIdRQjk2KzKt23b0Gn0hILz8RrD+uwabJfJOUo1r2NrEdVI0YctPKI8oQbQTeCQr0u9/AQ4ona1grN1y3/KEao7HwELYfi0ynuZYAY6ai9vEQj/qyi1hiTzQpPef8JtpGq1iH/gtOi2zPkNiQNL5idYznBMEaexn1BIl3JvsZjbkDovVvQa7LVte7nc2WyoOSgbKo5AQs+rwgwUtyLFIp1ky+1msvRUW93PS52HUxCVWKOxJvlFrBV0AHQfvWGj1TPbOxPIX5eUIzhpE4wSKuTZyrmXIbqw/SE1bvt+EfO8JT2JS370gkuZdgRzUX9D/AHitYJt5Hbm/xhvWD2T4j6iFG2hvOe6g9GH1EBBlosP2fSAcUp7/AHphHmspyPn9I2rG+IZVMZMt2ytPdlVrAhcoBu19hcqvrGT/AGYU5fE1IvaXLmOTy1UILnkLsIJx7UvVVDTteyB7Kn3sQhN26d5ibH8MM3SsRRUpUy01OIYZUzXWokIzlgnaI1mYjQEAMGB5aHXpDiVVUFFLYUqglgUdy5M0Ee64ezKunu6RRMPkCeMp0nroL6doB7rf1jYfe233k3AmplewnAWVjp2ltAjE7PyBO+x5RD3WjvXo41tmgfZtxF26vIcjPKsVue8UOmo3WxsLHqIZfa/iypKl04PfY9ow6IoKrfzYm34DFUw/H1wp0VlE6qawnAEAy5W4lZubbG3KwvyitcW461VOmTmFs5AVb3yogsq/U+ZMWTfWns4HFKTa0QtCc00k8h9YdTp2Z8vqfSGGGNbM0GkPdmPU29IzWQxeCUR7m526QdKnWwhgZ3SHmHSbm5hGiqZLTML/AIlAuYKyaqx10PtKfDb4QwpuHKmW9wt1OhZWGo9bRJU9aEcW9YlanH0l6Np0vzv0POEUmsDuMX8im12HVGbvoV+6CV2+MM2w6aPc+a/rE5iWIma5bbkPARHO56xRSZGSVkaMMm/cHxX9YEP85gQ3Zi9Uej7wUmBAYQpMrnGExRQVAJ7jI+oF7Xtr8Y8+1DqdFFgNup8TG4faJSBMObLcBbiwvbvHW/XX6xkeDUKf4k32R7K9T1PhDwM1YTBaFnvlUeLt7Kj8zElOnGWVyA5lIOew3HQdILW1xbuo2VBsqiw9esR5v1hmxkjXcCraTFaf+GnqEnoMwt7QIH+JKJ5dV5bG4sYzLi7hubRzLTBdG/w5i+w4/JhzU6+Y1iPk1Ly3V0YqwIKsDYgjYgxrnDOOCuk5KqUCSRvbLMK7TJXNJgO457rzWBdsFUsGY09PLQhp5BIUWlC5N+r2Iy6cr36wvOr5TapIlPb3bMD8M0WPivBXpiHUs0hz3HQhQL+64C6N4m9/lFWnSVfmQ3JjuP8AMPzifnJVawSacSiYuQoE0tlGlh4DpEHVGxv1tr8oa1Mpr66ONQRsw/WDyJ+dbH2hB6pZRuzeGLKbiEmmMOcJqSPGCF26GCkBsVz3EM6du9bzHzg3bW0OkN0fvXh0hG8olZj6QKOjmTgUlIztvZQTYA7noPOHmGYBU1CNMlSyyLoWuoBb7q3Opi58MTKehQKzBpjsO0Ye63JANwBcjXc/CJSkor9LRi5P8KthuOzaJaiSJeSZPyq8xrhlQZgyqpHvX9q/9pCp4iWoo0p3QI8vuZlHdIUWXQeybAReMfwCRWL3tGt3HHtKfzXwjK5tI8ie0uYLMDY9CRzHgRY+sCPIpr9NLi6snKCfLeV2jMFmKLE/9zLoPJ9Lf1W67o1uOlmBCjtFsTMub6eySNi+m/56xFTbKCdPTc+EN0IA31Op8z+7QFBLJWfqJSj1OWFyx1Y3JJuSSd9evzhpVPc+Q/3hZ5sMzreKpHNJilGe63jf6QlTPYGDUx7vrDcNa4hvsS6odS3JAA3Y2idD5EsOcQuFrdrnkIfO+ZvAROSyUi8WOKZidTF54NxQFhIcjI+gDBWXMRpcMNj9bRQ0Yw+pWINwYk8ZKVapmm1nBFNPXVRTzM7KHlWCPa+pQ3FiAdrEWiu4r9msxL9lNDEcnFr+RX9ItHDNeKpFDk9rLIN72OxUOD4gkHz8YsNZ2jSAyMFdGsxKhgwBsdLjfQxRNVZzSUrpPJiEzhGvBI7EG3MOtvS5gRrP8XO+9K/0N/8AeBC+9Ab2uf8ACejjGMp4QxnGGyqKeZPl6DM65BY8+0awI+MalSU850BmqkttbqGz26a2AhmmKVb7SqgJh5Wwu7oB09q5MYq087R6Lx7hmVVy0lTmfIhDWUhcxG1zY6eUMKTgDD5e1OGPV2d/kzW+UNHBrMEVxzIvBrE6AE+QJ+kek5OE06exIlL+FEH0EOBLA2AHkBBsPY8yycNnOygSphuQLhH5ne9osdROeYJUmWCWJOULodHYJYjoqjyjc5oPWKGmAJImO6aklgn9CMSzepJsPAeMJOVK2U4vk6RKUCzlk5KkJNJWzrcHOLC+bkHH3udtddYr9bwQjNnSdklHXVSzrrqpFxt46w9E7K1mOU+7c6HyPPyiXkorLqSQw72unwiPvXs6PY65TKviXAVOyKZc+YG3V3yFb+AAB9LxmeL0TU89kNrq1jba9gbjwIIPrG4YXVypbtTuRkAJTNr3TqwN9dDfXofCM04lwGonzp0yVKd5bPdG07yiwUi5uRYD0ikJNv8ACXJFJfpWdG12Mc23MLTMMnSxd5TqOpVgNN9bWhm4BF94qTFEpmmsElqXdjYKP3YesNzTFXKEEuGKBRqcwNrC25vpFp4BH/i08z9Ij5TsuJXT2v4o2v4zDr8NYZ4x+WTT7f7RpfD0iZIppMlxlKqSy8wzMWOa3O7Q8eklO2d5Utm+8yKT8SI7Le+phSPOlJuTZ6sYKMUhRGAPTwGgipfaHhgdFnr7ad1wPaZfdI8VJPoT0EWaZFMxusLzCL91dBv6n4/SG477WheVLrTKIrk8yfM/SOlusT02jRjcrY8yDa/jb+0M5+EqfZcjwIv89I61JM4XFoiS14CjeJBMKbYOh9T+kIzMOmA2C5vwm8N2QOrGEtrAwid4nKfAWI77BPDc/wBoZ4jhhRgFuwIuDb4g2hk1YjjKrEqOZZT5w4M+228IGjmKNUa3x+kOqWQky4uVb0+YhZVseN1QrKD7m8PJbmGU1JkoBbE9GGx/SAuKkaMphGm9DqSWy4cO4m0l0mDl7Q6qdGH75iNgUoZDsh7jqHB3vmG/0jB6CqR7WNvyjTOGcXCUc9JjhezXMGJ0CMbb9AT/AOqJp1aDKN1IX0+99P0jsRS8TU//AJiX/qEdjiqX0zrtfa/00tQebX9IMYF45ePVPLBaCMkHgwSBRrEMhg4ldYWgWhqBYky+UUWrZhMfMR7TachY6fK0XxxFIxOWVnOH0zMWBtcWO0R518To9K6kxgVU6Ouh66qfXaFZFBK1sMttspt9IVlkrfS4/p1+W8KU1Mk09xAG95gCLekckYtukd0pJK2EwvAUzs6DUa3bvd4nqf3rE+aAX7ug+6d1PS/MeMOqalCKADoOvhDpbR2xjSo82c+0rIxsOYi3dI5jkfiIisT4SkzbtNkS2NrZrDN8RrFrVIMJfWG6oTszP8P4GlynEyTLZGG13Yj4MSYgajgLsJ5qZjF1zM+UaEMzXU3G6jXTyjYMsJzpCupVgGB3B2jOP6FTp6M9kbC8ObRYZ3DKe4zJ4XzD56/OGj8PzB7Lq3mCv0vHJLhkjvj6mD2V+quBeM/nNdifE/WNIxbCqlUOSXn8FZb/AAYiM+qqCah78qYn4kYD4kWMGEWtoHJOMkqYyLnx+f8AeEGf9/sQuSPD5Qm37/d4qTAk0cx8zC6Trf20+cNlEdZIBgTp/SO58yX5jX05w2qFMKUD62Ox0PrBBYvKe4tpCEynF8w3hNkZGsfTxEOEmXgaNsWlvcWPzgkykB2+EBRCkqZACRwpMrBl0PMdYsyZmp5qA6shHmNGt/qUQ1VFYQ/ojlvGbMorRnloEOa+UyzZigaB2A8rm0CL2c/VHqoKI6pF9bwQzh4/lBlIOo1jCCoI6iOwkYJlHQQexqHFo5CK+BPxJ+sGLHkfleN2BQpaGlbQJMFnUG23UeogTe2910HmhP8A84ZzGquTyv8AQ3/6Rm0FJrQ2OAIDdWceAIt8xDyRRBBZQR++ZiOn1FcDYPK8+ze3xzmG0+dXlSBMkqSNCENx4i5I+UT+K0hnKTw2WDKBuf36x1JiHQOnkGEVjD66plqqVMntSNO1QKWbxZDoT4gjyh6tVTP7aID0dCh+Yt84PZA6ssap0g9ogkw6V7SF08UclfgCRBxJnA9yoDf0uAT8Ra3whuwOpNQIj1qpq+3LB/Cf3f4CFkxFDuSh6MCPntBtAocwLQVJqt7LA+REKEQwAhWE2l3ha0FdgBcxjEdW4bJcd+Uj+BVT9RFdreCaR9TKyfgLIPgDaLba+pgr9Bv+9vGJvI8XRnNb9m6WIkTXD6WD2ZBrrmIAP1im4thM6mco6OwHvojsh9baesbsqW/f71gjyhzhWkOpyR54dw3MeIhsiEGPQlVgciZ7cpG/Eqn8og6vgCjfZGQ/0Oy/K9oFMbuZVLIcWPxgGnAi+VH2Zgayql18HCuPlY/OI+bwJVJ7Ly3/ANSH4WI+cLTHUosqgSDiReJx+Fatf+lfyZPzMITMIqU3pnt4C/8A7bwMh7L7I9Uyw6pTqIUWkmAay3HmrfmIkcBwWZNfYhRqWIIHl4wGG1soeNVqifMGXZiPhHYvM/7N6tmZu0p9ST/1OZv0gRWkT7fprkEECBDEBdIOYECCYLHYECAENBYECMYIYTeBAgMxwwR5SkagHzAgQIASp8RfyyDL7hvuvd+kSvDk5mU5mLeZJ+scgQkf5FZfwJaebNpp5Q6b2YECLEXobz5K39kfAQ0lzWvufiYECECyYlHSEp3tjygQIo9CrZ3kfIwnL/IQIEKw+Q7bQVYECAjAm7RwQIEYwcxwQIEAIRoSMdgRjHIECBGMdgQIEEx//9k="
                                    alt="" style="width: 100%; height:100%; object-fit: cover;">
                            </div>
                            <div>
                                <p>
                                    These requirements define the entire website and the tasks that should be performed by it. They are functions that we must implement to enable users to accomplish their tasks. It includes
                                </p>
                                <p>
                                    These requirements define the entire website and the tasks that should be performed by it. They are functions that we must implement to enable users to accomplish their tasks. It includes
                                </p>
                            </div>
                        </div>
                        <p>
                            These requirements define the entire website and the tasks that should be performed by it. They are functions that we must implement to enable users to accomplish their tasks. It includes
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center" style="height: 70vh;">
            <div class="d-flex navwid container">
                <section class="position-relative" style="width: 150%;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="160" height="160" fill="currentColor" class="bi bi-quote position-relative ml-3" viewBox="0 0 16 16" style="opacity:0.1;">
                        <path
                            d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z" />
                    </svg>
                    <p class="position-absolute font-weight-bold" style="top:20%; left: 20%; width: 70%; color: purple;">
                        Our mission is to ensure that children are having sustainable education that can help them tackle real life problems. When we say sustainable we mean that the education behaviour that we implant on your children it's learning and learning till the end
                        of their life it's nothing short but a well appreciated education.
                    </p>
                </section>
                <section>
                    <h1 class="font-weight-bold">
                        Welcome to</br>
                        School for Children
                    </h1>
                    <p class="my-4">
                        These requirements define the entire website and the tasks that should be performed by it. They are functions that we Map implementation showing where the school is locatedmust implement to enable users to accomplish their tasks. It includes
                    </p>
                    <button type="button" class="btn btn-outline-secondary">Apply Here</button>
                </section>
            </div>
        </div>
        <div class="py-5" style="height: 690px; background-color: rgb(210, 210, 210);">
            <div class="navwid container position-relative">
                <div class="d-flex justify-content-end">
                    <svg class="mr-5" style="width: 50%; height:300;">
                        <rect width="100%" height="100%" style="fill:rgb(22, 22, 82);stroke-width:3;" />
                    </svg>
                </div>
                <div class="position-absolute" style="top:40px; right:100px; height: 350px; width: 700px;">
                    <img src="https://media.istockphoto.com/id/109722088/photo/african-schoolgirl-and-her-teacher.jpg?s=612x612&w=0&k=20&c=3pQG8hAdGUX0uay5MdOG505CiDewdszKI1wUG6ARcUc=" alt="" style="height: 100%; width:100%; object-fit: cover;">
                </div>
                <div>
                    <section class="position-absolute bg-white p-3" style="border:4px solid; border-color: rgb(22, 22, 82); width: 30%; left: 20%;">
                        <h5 class="font-weight-bold">OUR TEACHERS</h5>
                        <P>
                            These requirements define the entire website and the tasks that should be performed by it. They are functions that we Map implementation showing where the school is located must implement to enable users to accomplish their tasks. It includes
                        </P>
                        <button type="button" class="btn btn-outline-secondary">See Team</button>
                    </section>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center" style="height: 50vh;">
            <div class="navwid container">
                <section>
                    <h3 class="text-center font-weight-bold">
                        WHY WILLIAM BRANHAM ?
                    </h3>
                    <p class="text-center px-3" style="line-height: 1.6;">
                        These requirements define the entire website and the tasks that should be performed by it. They are functions that we Map implementation showing where the school is located must implement to enable users to accomplish their tasks. It includes. These requirements
                        define the entire website and the tasks that should be performed by it. They are functions that we Map implementation showing where the school is located must implement to enable users to accomplish their tasks
                    </p>
                </section>
            </div>
        </div>
        <div class="d-flex justify-content-center py-4" style="background-color: rgb(210, 210, 210);">
            <div class="navwid container position-relative">
                <div style="margin-left: 150px;">
                    <svg class="mr-5" style="width: 30%; height:500;">
                        <rect width="100%" height="100%" style="fill:rgb(22, 22, 82);stroke-width:3;" />
                    </svg>
                </div>
                <div class="d-flex align-items-center justify-content-between border border-dark position-absolute mx-5 bg-white" style="top: 15%;">
                    <section style="width: 150%;">
                        <div style="width: 100%;">
                            <img src="https://files.ecatholic.com/15481/pictures/2021/3/pupil009.jpg?t=1615707722000" alt="" style="width: 100%; height:100%; object-fit: cover;">
                        </div>
                    </section>
                    <section class="d-flex justify-content-center">
                        <div style="width: 80%;">
                            <h3 class="font-weight-bold">Computer Lab</h3>
                            <p>
                                These requirements define the entire website and the tasks that should be performed by it. They are functions that we Map implementation showing where the school is located must implement to enable users to accomplish their tasks. It includes
                            </p>
                            <button type="button" class="btn btn-outline-secondary">Tour School</button>
                            <ul class="d-flex justify-content-end list-unstyled mr-auto">
                                <li class="nav-item mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook iconfb" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                    </svg>
                                </li>
                                <li class="nav-item mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                        <path
                                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                    </svg>
                                </li>
                                <li class="nav-item mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter icontw" viewBox="0 0 16 16">
                                        <path
                                            d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                    </svg>
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="navwid container my-5">
                <section>
                    <h2 class="text-center font-weight-bold" style="margin-bottom: 80px;">ADMINISTRATION</h2>
                    <div class="row">
                        <div class="card px-0 col mr-3">
                            <div class="position-absolute" style="width: 100px; height:100px; top: -50px; left: 30%;">
                                <img src="https://avatars.githubusercontent.com/u/83271541?v=4" width="100%" height="100%" style="border: 3px solid;" class="card-img-top rounded-circle" style="object-fit: cover;" alt="...">
                            </div>
                            <div class="card-body">
                                <h6 class="card-title text-center font-weight-bold mt-5 mx-">Card title</h6>
                                <p class="card-text text-center" style="font-size: 12px;">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                                </p>
                            </div>
                        </div>
                        <div class="card col px-0 mr-3">
                            <div class="position-absolute" style="width: 100px; height:100px; top: -50px; left: 30%;">
                                <img src="https://avatars.githubusercontent.com/u/83271541?v=4" class="card-img-top rounded-circle" style="border: 3px solid;" alt="...">
                            </div>
                            <div class="card-body">
                                <h6 class="card-title text-center font-weight-bold mt-5">Card title</h6>
                                <p class="card-text text-center" style="font-size: 12px;">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                                </p>
                            </div>
                        </div>
                        <div class="card col px-0 mr-3">
                            <div class="position-absolute" style="width: 100px; height:100px; top: -50px; left: 30%;">
                                <img src="https://avatars.githubusercontent.com/u/83271541?v=4" class="card-img-top rounded-circle" style="border: 3px solid;" alt="...">
                            </div>
                            <div class="card-body">
                                <h6 class="card-title text-center font-weight-bold mt-5">Card title</h6>
                                <p class="card-text text-center" style="font-size: 12px;">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                                </p>
                            </div>
                        </div>
                        <div class="card col px-0 mr-3">
                            <div class="position-absolute" style="width: 100px; height:100px; top: -50px; left: 30%;">
                                <img src="https://avatars.githubusercontent.com/u/83271541?v=4" class="card-img-top rounded-circle" style="border: 3px solid;" alt="...">
                            </div>
                            <div class="card-body">
                                <h6 class="card-title text-center font-weight-bold mt-5">Card title</h6>
                                <p class="card-text text-center" style="font-size: 12px;">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="d-flex justify-content-center" style="height: 70vh; background-color: rgb(210, 210, 210);">
            <div class="navwid container d-flex justify-content-around align-items-center">
                <section class="text-center">
                    <div class="py-2">
                        <h6 class="font-weight-bold">CALL US</h6>
                        <span>(+255) 7345 690 873</span>
                    </div>
                    <div class="py-2">
                        <h6 class="font-weight-bold">MAIL</h6>
                        <span>info@schoolproject.ac.tz</span>
                    </div>
                    <div class="py-2">
                        <h6 class="font-weight-bold">LOCATION</h6>
                        <span>Mbeya Mjini, Kyela</span>
                    </div>
                </section>
                <section>
                    <form style="width: 500px;">
                        <div class="form-group">
                            <input type="text" class="form-control inputcust" style="box-shadow: none; background-color: rgb(210, 210, 210);" id="exampleFormControlInput1" placeholder="Enter your Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control inputcust" style="box-shadow: none; background-color: rgb(210, 210, 210);" id="exampleFormControlInput1" placeholder="Enter your valid E-mail Address">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control inputcust" style="box-shadow: none; background-color: rgb(210, 210, 210);" id="exampleFormControlTextarea1" rows="3" placeholder="Enter your Message"></textarea>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" name="send" class="btn btn-outline-secondary">Send</button>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
    <?php
        include './php/components/footer.php';
    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="./Javascripts/navigations.js"></script>

</body>

</html>