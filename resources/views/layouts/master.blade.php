@include('layouts.header')

<div class="wrapper" id="app">
@include('layouts.navbar')
@include('layouts.menu')


    <!-- /.navbar -->


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">


        <router-view></router-view>


    </div>
</div>
<!-- ./wrapper -->
@include('layouts.footer')
