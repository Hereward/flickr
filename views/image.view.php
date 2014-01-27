<!-- Main jumbotron for a primary marketing message or call to action -->

<div class="jumbotron">
<div style="text-align:center;" class="container">

    <div class="row">
        <script>
            document.write('<a href="' + document.referrer + '">&lt;&lt; Back to Search results</a>');
        </script>
    </div>
</div>


<div style="text-align:center;" class="container">
    <div class="row">

        <?php
            $url = "http://farm{$_GET['farm']}.staticflickr.com/{$_GET['server']}/{$_GET['id']}_{$_GET['secret']}_c.jpg";
            //$full_url = "/image?farm={$image['farm']}&server={$image['server']}&id={$image['id']}&secret={$image['secret']}";
            echo "<img src='$url' alt='image' />";
        ?>
    </div>





</div>

</div>