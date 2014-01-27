<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1>Search Results</h1>
        <p>You are viewing image <?=$data['photos']['page']?> of <?=$data['photos']['total']?> images matching your search terms.</p>
        <p>Click on a thumbnail to view the full sized image.</p>
        <!--  <p><a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p> -->
    </div>

</div>

<div style="text-align:center;" class="container">
    <div class="row">
        <div style="margin:10px 0;" class="col-md-3">
            <?php
            $kw = urlencode($_GET['keyword']);

            if ($data['photos']['page'] > 1) {
                $prev_page = $data['photos']['page']-1;

                echo "<strong><a href=/search?keyword=$kw&page=$prev_page>&lt; PREV</a></strong>";
            }
            ?>
        </div>
        <div style="margin:10px 0;" class="col-md-6">
        <?php
        foreach ($data['photos']['photo'] as $image) {
            $url = "http://farm{$image['farm']}.staticflickr.com/{$image['server']}/{$image['id']}_{$image['secret']}_t.jpg";
            $full_url = "/image?farm={$image['farm']}&server={$image['server']}&id={$image['id']}&secret={$image['secret']}";
            echo "<span><a href='$full_url'><img src='$url' alt='image' /></a></span> ";
        }
        ?>
        </div>
        <div style="margin:10px 0;" class="col-md-3">
            <?php
            if ($data['photos']['page'] < $data['photos']['pages']) {
                $next_page = $data['photos']['page']+1;

                echo "<strong><a href=/search?keyword=$kw&page=$next_page>NEXT &gt;</a></strong>";
            }
            ?>
        </div>
    </div>


    <div class="row">

    </div>


</div>