@extends('layout.main')

@section('navbar')
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="border-bottom: 1px solid rgb(22, 22, 22);">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Posting.com</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
@endsection

@section('content')
    
<div class="container">
  <div class="row" style="margin-top: 30px;">
    <div class="col-sm" style="background-color: #2f5d62">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque purus enim, pharetra et risus ac, volutpat viverra orci. Vivamus placerat massa a dolor convallis tincidunt. Suspendisse suscipit pretium ipsum, eu eleifend odio venenatis eget. Nunc accumsan neque et gravida consequat. Integer sed scelerisque ipsum. Vivamus hendrerit at turpis id convallis. Ut condimentum elementum vehicula. Phasellus vel ultrices orci, ut imperdiet velit. Vestibulum tempus, velit vitae iaculis dictum, neque mauris bibendum sem, nec dictum eros ante sed quam. Suspendisse fermentum, est at varius sodales, sapien justo fermentum ipsum, quis sollicitudin lacus nulla eget justo. Aliquam vehicula, nisl placerat dictum lacinia, est mauris vehicula odio, ut laoreet odio mi nec mi. Mauris ornare, est quis cursus ullamcorper, urna felis scelerisque nunc, ut pharetra ex tellus nec arcu.</p>
    </div>
    <div class="col-sm" style="background-color: #364547">
      <p>Vestibulum leo est, maximus a sodales non, consequat in dui. Nulla quis eleifend massa. In libero nunc, dignissim in mauris a, malesuada interdum lacus. Vestibulum lobortis scelerisque nisl, eu dignissim lectus rhoncus a. Aenean consectetur, ipsum nec iaculis sollicitudin, mauris ligula elementum est, euismod auctor nulla nulla tempus nibh. Donec luctus metus eget erat sollicitudin, et pulvinar felis egestas. Fusce venenatis eleifend ante non imperdiet. Suspendisse eros purus, vestibulum et justo id, feugiat pellentesque massa. Etiam scelerisque augue eu suscipit hendrerit. Pellentesque fringilla ligula vel nisi ultrices molestie. Etiam id justo vitae augue tempor malesuada at vitae metus. Donec fringilla elit in nisl tempor pulvinar. Suspendisse facilisis massa id neque ullamcorper, sit amet scelerisque justo vestibulum. Cras vitae luctus purus. Duis placerat egestas leo finibus consectetur.</p>
    </div>
    <div class="col-sm" style="background-color: #ffe268;">
      <p style="color: black;">Donec quis ex vel ligula pellentesque iaculis congue sit amet velit. Suspendisse imperdiet malesuada massa a blandit. Proin elit neque, porta eu viverra blandit, scelerisque sit amet nibh. Sed vel massa id mi malesuada maximus at vitae sem. Sed efficitur eleifend diam sit amet aliquam. Cras tempor viverra metus, et feugiat felis lacinia ac. Aenean rutrum sapien vitae justo mollis facilisis.</p>
    </div>
  </div>
</div>

@endsection

@section('css')
<style>
    p{
        color: white;
    }
    .col-sm{
        padding: 20px;
    }
</style>

@endsection