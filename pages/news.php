<?php
    include '../php/connections/connection.php';

    $select = 'SELECT * FROM news order by CREATE_DATE DESC';
    $latest = 'SELECT * FROM news order by CREATE_DATE DESC limit 1';
    $results = mysqli_query($conn, $select);
    $forlatest = mysqli_query($conn, $latest);
    if(mysqli_num_rows($forlatest)>0){
        $newsrow = mysqli_fetch_assoc($forlatest);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/styles.css">
    <title>Document</title>
</head>
    <body>
        <?php
            include '../php/components/navigation.php';
        ?>
        <div class="d-flex justify-content-center w-100" style="background-color: rgb(233, 233, 233);">
            <div class="navwid">
                <h2 class="font-weight-bold my-3">NEWS</h2>
                <div class="d-flex justify-content-between w-100 py-4">
                    <div class="mr-3">
                        <div class="card" style="width: fit-content;">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJDIYpFOSgImj5GKq8Ud73hv799Gs0N94jTg&usqp=CAU" class="card-img-top" style="object-fit: cover;" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo strtoupper($newsrow["NEWS_TITLE"]);?></h5>
                                <h6 class="text-muted">
                                    Posted On: 
                                    <?php 
                                        $date = strtotime($newsrow["CREATE_DATE"]);
                                        $dateformat = date('d-m-Y',$date);
                                        echo $dateformat;
                                    ?>
                                </h6>
                                <p class="card-text">
                                    <?php
                                        echo $newsrow["NEWS_DESCR"];
                                    ?>
                                        These requirements define the entire website and the tasks that should be performed by it. They are functions that we
                                        must
                                        implement to enable users to accomplish their tasks. It includes These requirements define the entire website and the
                                        tasks that
                                        should be performed by it. They are functions that we must implement to enable users to accomplish their tasks. It
                                        includes These
                                        requirements define the entire website and the tasks that should be performed by it. They are functions that we must
                                        implement to
                                        enable users to accomplish their tasks. It includes These requirements define the entire website and the tasks that
                                        should be
                                        performed by it. They are functions that we must implement to enable users to accomplish their tasks. It includes
                                </p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <?php
                            while($newsrow = mysqli_fetch_assoc($results)){
                        ?>
                            <div class="card my-3" style="width: 18rem;">
                                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBUUFBcUFBQXFxcYGhsbGxsbGBseHhgbFyEbGxobHRsbIi8kHR0rIBsbJjYlKS8yMzMzHSI5PjkyPSwyMzABCwsLEA4QHRISHTIpIikyMDIyOzIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIwMjIyMjIyMjIyMjIyMjIyMjIyMv/AABEIAKgBLAMBIgACEQEDEQH/xAAbAAACAwEBAQAAAAAAAAAAAAAAAQIDBAYFB//EAEUQAAIBAwMCAwYDAwkGBgMAAAECEQADIQQSMUFRBSJhBhMycYGRQlKhYnKxBxQzgpKissHRI0Nz0uHxFRajwuLwU2OT/8QAGQEBAQEBAQEAAAAAAAAAAAAAAAECAwQF/8QAJBEBAQACAgICAgIDAAAAAAAAAAECESExAxJBUSJhcZEEEyP/2gAMAwEAAhEDEQA/AOE94gEedsbc7VxM8ebr60PqAU2BOOCWkgTMYA6z9z3pMEQwQXPXMAfKMk+pj5VXcSDjIPBjkf612fLtrVfO5FOSSoYdcr5HB+YVW/71FBNphGVcH6MD+nkqehcwwABZfMB3Bww/wn5KagUCs6SIIG0meDBB8v7JolvyjqU8/lHxBSB+8AY+5irl1Lrh1PyIiPSCIj0j1xU9wLqwIOxCTEgSsleQDztFQ97dCD4tv5gW+xIMfQ1UO7qU/CpJ5G6AFPoByPQmPnVKPLqzmfMJntOfpFaNMu8EsqED9mDwSfhK9Ae9V6qwFEgEHcyxMjyxkGAYzwahd9qb07m3fFJn5zn9aritUbxj4xiPzgYBH7Q/XnvUYVOYdu34R8yPi+mPU1WTsKYkhgvRwD5CODI6d/8ApVyXmVvdhBkwR1acHzes89MRUhdYDa7kMTIEfBj8Q4CkY2x/oTUXtqhQIYjP7AOIHrEx2VgKjXUZdSwLHblR5Qe4XE/Xn61TTp1XO1GinRQKnRRQFFFFAUUUUBRRRQFKnRQKiKdFAopVKlQKlTIooqFI1I0qNEagamaiaLEKVOo1G4vFW22xtPByD+U9/rwf+gpNZIbaMzwR1HcelO1YZvhUmTExiaM8pITbfIyMEdwcEfIg/rWjU6Y7QwyFEHuBJ2kjpgrjpRqrG1AGYFwYAHbBg9evUDt8rNPtYl8yZ3joNwhmnqMn5T8pGvhnsjyOe5VfvLH/AAD71qQhRuIj9rgfR7fX5g1nUgIs4lmPAPRQME/vVdaAmVIB/Ycofs/PyFVmLWc/gMliAMKcnjzrGf3hWK+wLGDIGAe8dfqZP1rQTG5oyoidoQ7nwJAPQbjPpVOmTO7kzCju3+g5P071C88J27eyS35SGj4k3gxgxJ9PmDFScLbAKGWPDEZjoVHAP1J+WajqlIxyoJk87m/ET6+h6fWq0vsohWIH/wByOx+VVN64TB93k5czjnb6t3b06de1Z2JOTkmiimmdiiiiqgooqSIWIVQSx4AEk/IDmio0VZetMjFHVlYYKsCCD2IORVdAUUUUQUUUUBRRRQFFFFAUqdFQKinSoFSqVI0VE0qlUaKiaRpmkaNRA1CtNvTsw3cKPxHj5DuflVk2hiN3qWIn5BcRUdZGzSQRIg9l6qTMx3U4HUZ9DNzMV/pCF7jcQxHbEkj6x3FeTcbcxaIkkwOk5pVNMXJvuayRsRYBxjrOOB3nj1xFVi0F+J4PEKNxHQg5A/WnpEwTMMZCwJIgSxA/NBAH7xqF21DbVO75DqOR61Wb9rJKCVIZDjKyAeYKtwfl96YuWz8SFf3Dj+y3+oqC4tn9phH9UGf8Q+9RspuMTHP6An71U2svusBUmJJMiOgAHJ4z96vtgFJBgBNvfaWJkkDoe/Y+kVnuafbJkGADEEGDEHIjr3qtXIMgkHuDFE3y13W/2fmbeTgHPcHBaCQIPy3Y5NYqkzljLEk9yZ/jUaJbsUUVO3bZiFVSzHgAEk9cAVRCtPh9pHu20uMURnVWYRKhiAWz2mart7IbduLR5QIAnuxPQdgM9xVVQnD674d7HeHqxW2j6t1MMzPFtCOQzIAkg4KgMwnI61m9rvaFNCh02jW1buuPM1tFRba+kZLnueMnFeSP5RWTTWbFuyAUthHaQoLLgbQowpABPHJGIk8Nfvs7M7mWYyT61mY29vXn5cZjrBWxkyTJOST1NKiitvGKKKJoCiu58I9g1u2rV25faLqqwVLYkbum5myfkOk1q9qfYzTaTSPcW4/vRt2b3Ub/ADKGAUAA+UscZxWfaO3+jLW3zyia+1+GeA6F7aXLensFHCkMye8JJkcPOJB9cVxv8oPi+luKmls21W5ZuHeyIq25ClXVQMmGjkD4aky3WsvB647tcNRRRW3nFFFFAUUUUCpU6Kio0jTNI0WImtOmt24lmXd0VtwH1IGflIqQ042cEudsAdN0kfMkD6Aj6Zr9oqQCQZAOM81HScNG4lpOx1EwvvAsdIzGPSIycUXEVjLTPpdtkD0G2AB6RWA1oFm2PjLyQDhREMAR+L1o6Sp6NgHEx6E8A9z/AAnpM9KvuoWYqQQ4mAckjkqSeSOnfPpVPlZWIQLtiCCTJJjaZOTEnEfCavst7xQp/pFHlOcgdMZ3Dp3GOgox+kbO0pnhWM8x5wNpMZiVMx3FHwkmGCNIB4xIIInngfSrC/8AvAM/7xehmPMPQmOODHcVIMHIyCOoMBpAIWZIDR6H7VWSusrmN0EcGMHjLHoZmTEfKq9PbO+CDI3dJgwQCQOzRV3lUMCAASSAGBJBjECegOScSeetC3/MxYSHmQDHXdg95FRm9rtQmDGIAYjORO2SSAZ3dD3xWOr7l4EEAHzRJJkkDgYAgYH2FUVYlFFFFVkVNiJ8sxAme8ebjpM/SpadmG4qJhCDidqvCE+nxAT61Uair9NpLl3+jtXLkfkRm/wg17Wk9i9fcAK6VwD1con6OwP6V9G9k/aBdYhUKym3tVgWBA3rBcR0lSB8yKxe1ntre0V4WVtKytbV1LNBAaVEADBGyeuSfQDHtenqnhwk9reHA+Keyet0yF7thgg5ZSrgep2E7R6mK8Ovuvs140+s04ve7glmVlJlT3IPJWI5GMjOCPjXj+mS1qr9tPgS46r6AMYX6cfSrjlviseXxzGSzqug9m/Y1dTZa+95kVWClVtgsSQriCTB8rqeOTFeX7V+BHR3tgJZGEoxjI+kdx06x0r6d7NKun8OFxxIRHuOO5tKRx1kIPpFVe1XhdvX6IPpxJVTdtkDLSNxX5mWEEzuqe3LtfDj6cdvI9l/BrOk0a669b95cfaySAdiuVFtVDY3uWXzdJ5UAmtvhHtda1lxrVy2myCW3kMpGAQsoJGeTGYAGZBc23vCbRRpPubWB/8AqAW5AGZVUuEetfLtJoWuXrdjCs7okngFyFBxyMzI6Uk3vaZZXDUk4fQfA/FDa113TJcnTC25toDKrA3QJz1bnPHSrfabwK5rTY92pAF11ZjyEYKHuHcZgG3tG7M44g1zo8Ibw7xHTW2uhw4Vt4UgRdLpHJn5+tfSPE/FW0ti7ea2HCKqhA21m2sqHMHAJY8euQRC/pvD8pZl8K/aTxJdFoS9oFdii3ZUAjbMKjEHoAsyeYjO6vhxNfbNF45Z1+nJKjYQEe2c7GbBVoiFyIPWJxBA+b+1/ss+jfekvYfKPBlZ4V54PqeaYccOf+RLlJZ05qiiiujxiiiigKKKKBUUUGopRVlqwSwBBHUyCIUZJ+1X6IfFHMevGZ4zztmOk1rU+UqWgqOfylsEkd9u7GD3g4EreMZ3uAKd5HnLMdpyZMALjjy9cZ68VmtKLjFm4wAB64VfQQP09ZqWsUkK8ziJPWACD84MH1U96p065nfs6SMHPABwOnUgYo3vk7tpSpICgjMqWIOVUg78yNwMjFQVrbAby4Kjb5eoHH1zH0q7WjaNqqQp5bo0dAeo6z17AAAYI9KN9Nbtu8qA7V9Mk9WMdf4fqVsZcwwiMwRB6Zr0L5cKu65EbgQxiQ4gEIM4B7YNZTqIXahORBPefT/P+FGMouGpE78An41id3eOkH/M9IqhbLHIAAPEsBPy3GTS0yhmAPHbvGYHqePrQzGZYfTIHy9BRi3fab2IQNPJgiOJmPnwaqFa7t8upAJAGSJw0kCT6yfkZPFZKrN18CiiiqyKKKKC4W2Cb5gMSkTk7drHHYSvPWO2KaKKK7f+S2+Bqbls/jQEDuUP/wAjntNdz4to9FuF3Wi1K+RWuMfVtsFvMevBIB6zJ+Wexep93rbM8OTbIzkXFKdMxJBkdq772z8Gu6mwqWl3uro8Equ4uHDkFiByynnoAMATzy7e3xX/AJ9b09jwz2h0t0+50lxWKgzAZNqmJZQ6gNnr5owTXzH2x9mX0l1BvZ0vSUZ/i3SAwY9T5gZxIbIBBro/Yv2P1Fi+upubR7vcAikkszKVO4xG0bskE5ERgx7ftXd093WabTXn+BnvNDAbYClFJg4MMxHMCetScXhqz3w/Kavw9HUtbTSizfNtbe3Zc945tiMCCwIy0giO4HrUPAvGvD5XSaV0kBmVF3xjzGGcbW/MYJ4JzWPx/wAc8Pe1ctXrttyQZAkneAQpO0TI8vX+FcB7H+PW9Dcuu6+8DKFWJWQCTIJEicYMYmaSbi3yTGycOl1+pu+Gai5NtrmluH3koD/sbjxvCtwoLQQpIwywQZkHtzoLRFy1pWNwTBa3aUiZ8ocElR1MAySa8f2j9um1Nl9OtlVS4QSzHzDawcQFgcqMmcV52jvQLdy3btq382ugQgI95aZ3aQ0libaqDMyHPeKuvtyuf5axvCR1Oo8U1gfciuolASdttLfmhQJZmn5kk/b6VqLS6q3etliAwdfMYI3b0BIzGZI6HLCeB8oN25Y1bfzWQWMWwFDkpdhkQKwMkqyjjNdsPZjxa8k39YLcidm8iOvm92Ao4PBPFMjx5Xni2/LJ4V4Rb0PifuWusbb2GYEsEDEg+RyO21j0Mx9ei1ftNpVlb162Rx7sqXIGYwqtJmIxmMxFcXa8EXS6lP8AxNg9hkYJcDO6FxBUSASOuCOs11ftLodDotIzHSAFz7tSiz5juIYliBHkORnjGaVrG2Y3XD537Uauzd1T3NP/AEbRt8u2MZG3oK8iiitx48ru7FFFFVkUUUUBSNOkailNXWLyqCGBMmfpBWIx+Y5mopZLCcBRyxwPl6n0GafvAvwCT+Zhn6LwPnk/KjU4TvhnEhdqgSASJIxJAOSIA47d5JyrdKyBEGOQDxMcj1NP3h3bpkzMnM/OeaeoQAyvwtkendfocfY9ajau7dkRCjM4ESeO/wDCq9jdj+tbNGsAv1E8cgBWYwehMc9BNRt6x44J9Zuf+0xRuRsTRhDDKCdsksYk9lWZIAyTB46UrYRigO0yMhUYZPA8oH+fWqU1uCGXPcEc87hIwfljrE1G5qZkKNoIgnq3zIAH0AHrNGbYertIphWnuDB2/UYNNrisBuLSBGACD6ySIxHelbtqFBYNkTjbETt6+tAdOiMfm/8AoB/GqxQ1wRtUQOsmSfme3oP1qutTKptbwoDByMTxA7k9W/SslGadFFFVkUUUUBRRRQdX7De0NrRNda4PiUBSElpnOegj+PBius/85XLilbGkuMYzuYDeD+IjcCoI4McYHp899mtKtzU20fgsuO8soPOJAJbOPLnFfT/arxDUaNEtaTRLcQ7t023uKDPVVgkmZLmZ6yZrnl29vhyvr3xHI+Ne2OvUG3sFgGBIWSDJbDmQDOcZHfiuLuOSSzEsSSSSZJJ5JJ5NfRvaf2ht67TW9PDLrHNtSnu3WHZgGXc34SYIGeOpqX/k7w6w1vT6nUv/ADm5G1VMZbAHwkLJwC0T60lkZzwyyvF3P2v8H9h9E9tHD3LpIU/EoAJAO0kYgSORxPPFc/4fqPDhr3X3JuWLhtpaLLGxztUsyMR5ZJJkT6V03sXof5rq9XpEfeoFu5bbB3CGDfDiZcKT6H0qOr8M8H01xmvMfe795VnueUk7vKtuJGcDrFNt+vEskn2y/wApGkt2bFq1a09sB7hIKIqsrKBtSEHmLBz16DFYvCPYzUe7svcv2rB94bloEFmLXBbENkLB2L5czJ7xXUe2yrc0tq8GDKt1GDYAC3VZE+UG4hnp9K5f+VYMbti6Cfd7Cq8+RwxbnoSCv9gxMUl+DPGS239PR9lfALtrxPdqUTFlntFJ2eT3doBQcgqjRBzkGTM1z/t94teOtdBcdVtQECuwAwCGEdeM84rufEfGV0um0l+8SGdlVxncFZSWwM48rEdfmRXle0vssNeyaqzetqzoA0yUcAnzoyg55kRnH1kvPK54/jrHvteznXeFbrkF2ttBgzvtMV3doOxjjuRUvH51HgvvMSUtXF+a+795nq2H+3zqrxzU2vDvD10y3Q93a6j8xLMWLbTlVnAHQdT11afxHQWNJb01y47qFghwV3Bg8qWgIwG5hAPQHpNGuOrfjl8x8L8C1GpV3tW9y2wSzblEQC0AEyWIGAK8yvqFj200OmBWxZjzSVtoqboECSCVbPWeMd6+ZXSu47RCydo7CcD7VuW15PJjjjJq7qFFFFacRRRRQKiiioq3Vk7iCZjjoNpyIAwARB+tZzWm55kDdU8p9QZKn+I/s1WthiJ4X8xMD6Tz8hRrSu2u5gsxJAntOK13dMANonMlZyQyiSJgcjnGCFzVBFsdS59PKPucn7Cpfzhm4hYGTkkLwfM0kcxg9Y61HTHSnTajYe4PI/zHrk84gkda0u+2Alw2xAMAHJYbp69456Um0yHeIbyflySPzGTEEZxWcbT/ALu43Y7jx9qNza7R2wdxMYjngTJk4PaMjkitGrgKYEGY3Qsn4pXygDop7+bPIFZB7y2pBVlVoncuDEx8Q9TUHuM2WJPzNGLdRr0h3jYecgeobsOpDANHXNVDS3JjY5+Sk0rGAzdRAHoWnP0AP1iq9x70YvXLfprdxQymVEbjLbSNgJ454xx1FZdRd3sWiJ6TNWab4XjBMD5ghzH1IX9Kz1Ut4OiiiqwKKKKAooooLdMGLoFbaxZQGkiCTAMjNfSfaG/rdNYtNeNnVo524t3ARI3AnawUk5yVz1ma+ZKSDIMEcHtXceGfylX7VtUe1bubQFBkpgCACACI+UVjKV6PFlJLLdOy8OuJc0I1WosG0bO+6u+S6lGZiVZgG2tiAeZ64NeB7W+y97V6m1qNOFuW7i29zI6Lt6+8G4jBHESZBxxPN+Ne1Os8RBthDskE27KMdxHBciS3HoMTGKy6VdbZTYtxrKH8Ny6lvnkhLjA/YVmTTrl5Mbxq2PoPhfhWl0Wte4mqChLAW4t24NzG4zEediAse7XEdRxNc77dvoLly3dt3RcdrltbotmQLSgglSvlmAo5nj1rlH0abibmrtE9douXG++0Kf7VO3YsH4RqbpkL5US2JbCiZuZPQRmrrXO2L5NzUkfR7vtz4fbtLZRGuW0VUVCpMqg2r5mJ6RzmuT0Pt9qLW9dqXEk7PeA7kWfIJUiQAAMyegIFeNcuW7aq40tvaSyg3Lru25I3ArbZBiRynWtVm7e941tXtWimzcbdq2pXc6WzDhQxKl856HPWpvGRb5Msr3/UVeJa3V+IXPeOj3NoIVbdtiiA5IULMSckkknvgVXZ0eptjb7wWQclW1CWzmASU37pwPw9KvRGvbRfu333W58zzscXfdnDTKqPMRg+orztfpgnu4AWUyJk7lZ0cnOPMhjjEepKZy3Uc8pZzVn8ztCS+qQ/8O3cck/11Rf71KdKvS/cPzt2x9oufxrBV+hNr3i+9Dm3PmCRuI9JjrHUYmumnOZfp6+iu2VHvn0toW1MKGa4z3XH4Fl9kCQWbZCg9yoPi3bm5maFXcSYUQokzCjoB0FbvF7dwkXSUe0fIjW5FtQMi2FOUIkna3mMlszuPm0i534FFW3C21Afhgsox1JBOOsr17D0qqqwKKKdtSxgCSagVNkYCSpA7wa2adLasCX3EdgAB6y3P2irVtru3q7GCZk7picNGYMesiYFTbUxealwqZHyyAfXg46CpBWuHks3YmSfl3+VblPC3DuJBIXy7SJIAVvwTGIrzrybWgHsQfQ5B9DEUXWlbqQYIg1O0whlJjdBn1WYB9DP6A9KvXUh8XIJ6Mf8yMj5j6g1FtLJAWQSJAaMj9lxhv0ijUn0v2FWVZYMB5HEZ6kDpt6wfniYKN5eYQzkkXNon5FlI+1ZffugNtwY/KZBHyPT+GeKh7y3/wDj+7mf7oA/SsusrRYcIQoWGJAJJkEHB4xBB7H51el4NKFMLOJBwOYxg9iIz0rPcTdcWCsQJKmQFTyz/ZUH61a2oRSWTLEk9T1kSSBwcwBmMmMHTClQAWRjGeYmCsjp0Mnv0plLY/GzfJY/Un/Ks9MVXO1rs3kUyEY46uBP2Wex55FZ5qNOjNOnSooh0UqdEFFFFAVo0OsazcW4m3cv5lVh64YfqMjoRWetWh0vvCSzbLaQbjxO0HgAfic8KvU9gCQax74es99tWjn3t23sXc6vcd7HoAzEtbJIhUIeTiRXPgV6t23evAJZsXfdKZVFRmyeXdgPNcI5b6CAAKqPg9wGHNq3333bakfNN2/+7UnDeUt+GTSXAtxGYSqupI7gEEj7V6501y2bpY7mzdVieXs3ACST12sx9dw71iGksj49Sp9Ldq4x/wDUFsfrUnu6fEjUXYEDc6WwAOAFi5j0ms5Y+1XG+s5PxBk/2qIV2i9uthSSNjhgYOei26sfW2v6SSXuArcXjysgVjnEhxvWOZzEVR/4hbU+TTWh2Lm5cP1DPsP9mgeM3gIRxb/4aW7Z+9tVJqenB7yV6OnuXnb3lvS3XHvLrglWKbbwA2mBGMGd1Zr2jusoW69hNpY7mu2y/mJYgrbZmiSTG3qa8zUah7hm47Oe7MWP3NV1ZhJ0lz23/wA1sKPNqd3/AA7Tt9/eG3T95pl4t3rnq11EB/qKjH+9Xn0Vtn2+o9IeK7VuJbs2ra3F2t/SOSOnxuyyDkECQciDXm0qsAAEz5geI6DqT8+nz46ktt7J9sCJmPNMcyePSNv1mo02YkkkyTknuTUaIKuQwjnuVX6GSf8ACKprS1sKuxmAYkN+Ixg4MDnNFkZqt0p84Exu8v34P0MH6Ufzcn4WQ/1gP0aDUtPaZblvcpEuvI5yPvRZLtJ/Mk+m8R0M7XA+6t6fWjWqWKEctj6tD/xuR9KVlhsAGTFwnHEoI+fwzTvvCJHK7T8iQSP0C0a+EQlsCDGTgksCQME4kASCBINUi8UJUEMs8Hie4jg+oipG4hEGfxQIGCeIaZiYMR3rOiljAEk1Gv4aRcVhGOSdrnifyucDM8xPWagdDH40E5AfDR6iq9RYC7QG3MckAYA6R1M5PyjvSt3hADKrRxMzHMfcmjf8tqKzll2N7pjjaoXgyp4AJjoe9V6rSBRuUyobafnAM/LMHsRFRbWT0Zv3nMf2Vj+NSLMAxuYlNqrEdQRCjhRE/wDeiXVZadRFOq5J0UqKMpTTqNFBKilNE0Q6KU0UEpq/Ta+7bBFu7ctg8hHZZjidpE8ms1FCcNF/V3bn9Jcd/wB92b/EapqNE0LunRSmiaB0UpomgdFKaJoN/hHhlzVXVs2llm+yqOWPYCvsPhvs5Zs2Tas2EuuyMjXXgKFcQ4DRuaZOFEGIJXp8q8K9pb2lttb0627Zf4rmzdcbsCXlQo6AL+uax+IeOam/Pvr924D+Eudv9geX9KzZa9Hjyxwn3UNTafT3riByHtu6blMTtJUkEd/86yE1GitOFSpUqKIdbtS6AKCkttTMkGCoPPBz6VAMY3ATbEKV9TzMdTyGPp2ioXXZICtuQ5UkA46iDMEHkf61G5NIA2z+G5/aB/8AbW23cmBnahRlBPEKzt94+sVg/nTfsf8A80/5auvXbqD4yBJHl8okc/DE9voaqyrdIbgJDf0cEEsTswDABPfjHes15txCA7iTk9CzQABPQAAfepLYLgMzmWmOpMfMj9JqjNt/VG+kqf8ApRfheNGDw+YnMAR3wxYD1IHI4qxdOEWCwzBfkAgiVTdGCTEjnP7NT0t+eFAUd8yQMDgAgAScEwpzWfU5QtkbmVs8k+cSfUiD/wB6jcknJ6jVxJVssIhRAWcHPLenb7VjTTORIQkd4qywLceZob1BIHbA5Pzx6GnfbcxPvlz6XP8AlovfaC6lxwdv7oCn7qAahNQFMVWKnTqINOjGjp0qU0TSc0TUZomhpKaJqM0TQ0lNOo0UNJUVGihpKio0poaSmiajNE0NJTRNRmiaGkpomozRNDSU0TUZomhpKaJqM0TQ0lNKajNE0NNGn1BQzyDhh+YdvT51pdFX9q0+QYykQJ+YOCBg49I86avsXgJVso3PoejD1/iPoRGojdtlTDfORwQeo7ivQ8VcwR0LyD+6oGPQkk/X1rFfujaFB3R+KIAH5VnJHz7cDrHT6drk7YxAAPWZwPsaNT6jRo2MKJ+NoGYjGeem4qf6tK9akBmXaDw4yB0AfGf3h0zmqrDrhXkbSSDnBxPGekiPXvIgyqCfP5T0BJJjvgD/AE7UWdBXuW2KiQwMRg5HpwfnVd28znzGT/r6CtttlYM+4bjJYQcDoMZ2RyRmMYzOTVGGBkh/iY8eYmfoYiexmi64a10yvxbYCOPPuHyJkMJ9J9OtYX0zzhSR32n9ex9KbaifiVW9SCD90In61O3rABHu7f8Af/5qNcVmpg0UVXM6c0qKIlNE0UUBNE06KIU0TTooFNE06KBTRNOigU0TTooFNE06KBTRNOigU0TTooFNE0UUNCaJoooomiaKKCSWmbKqxHoCf4VAmiioum1NOAMwW7GY4k4XJjEx64ME00tMwIVVAgwQZUlucmTJAiDx6U6Ky6SMli2GJ3YCgk9Owj0yRV1+yNrGACv5SxGCqlTu/ENwyMc0UVpJ0jpmVVLGD3HosELHZmifQGoWrReWbc0k4X4nY5Py5yfWnRRfppfSqNwK2gVHV3JmcmEYmP6o5GKaeHq4DLMEfhJiesbknmiist6f/9k=" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text font-weight-bold"><?php echo $newsrow["NEWS_TITLE"]; $newsrow["ID"]?></p>
                                </div>
                            </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
            include '../php/components/footer.php';
        ?>
    </body>
</html>