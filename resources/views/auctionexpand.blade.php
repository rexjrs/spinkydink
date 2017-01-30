@extends('layouts.app')

@section('content')
<style type="text/css">
    #app{
        height: 100vh;
    }
    #main-content{
        height: 100%;
    }
    .pagefooter{
        margin-top: -50px;
    }
</style>
<div class="container">
    <div class="expand-container">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <a href="http://www.fashiontechguru.com/wp-content/uploads/2016/11/MacBook-Pro-2016-2.jpg" class="fancybox" rel="gallery">
                            <img src="http://www.fashiontechguru.com/wp-content/uploads/2016/11/MacBook-Pro-2016-2.jpg" class="img-responsive thumbnail" />
                        </a>
                    </div>
                </div>
                <div class="row pad-fix">
                @for ($i = 0; $i < 3; $i++)
                    <div class="col-md-4 no-pad">
                        <a href="http://www.fashiontechguru.com/wp-content/uploads/2016/11/MacBook-Pro-2016-2.jpg" class="fancybox" rel="gallery">
                            <img src="http://www.fashiontechguru.com/wp-content/uploads/2016/11/MacBook-Pro-2016-2.jpg" class="img-responsive thumbnail" />
                        </a>
                    </div>
                @endfor
                </div>
            </div>
            <div class="col-md-6">
                
            </div>
        </div>
    </div>
</div>
@endsection
