 @extends('base')



 @section('head')
     <style>
          .landing-page {
            position: relative;
            background-image: url('{{ asset('img/Group 2.png') }}'), url('{{ asset('img/Background.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            overflow: hidden;
         }

         .center-image {
             top: 50%;
             left: 50%;
             transform: translate(-50%, -50%);
             position: absolute;
         }

         .overlay-logo {
             position: absolute;
             top: 50%;
             left: 50%;
             transform: translate(-50%, -50%);
         }

         /* section about us */
        .what-is-section {
            position: relative;
            background-image: url('{{ asset('img/bg_blue.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            overflow: hidden;
        }

        .paperboard-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            /* background-image: url('{{ asset('img/paperboard.png') }}'); */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            opacity: 0.8;
            z-index: 1;
        }

        .what-is-content {
            position: relative;
            z-index: 2;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            width: 100%;
            margin: auto;
            padding: 40px 20px;
            gap: 20px;
        }

        .left-content {
            flex: 1 1 45%;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 20px;
        }

        .left-content img {
            max-width: 100%;
            height: auto;
        }

        .right-content {
            flex: 1 1 45%;
            display: flex;
            justify-content: center;
        }

        .right-content img {
            max-width: 100%;
            height: auto;
        }

        @media (max-width: 768px) {
            .what-is-content {
                flex-direction: column;
                align-items: center;
            }

            .left-content, .right-content {
                flex: 1 1 100%;
                text-align: center;
            }

            .left-content {
                align-items: center;
            }
        }
    </style>
 @endsection

 @section('content')
     <section class="landing-page">
            @include('partials.navbar')
            <img src="{{ asset('img/BEYOND BOUNDARIES.PNG') }}" alt="Beyond Boundaries" class="center-image">
            <img src="{{ asset('img/logo.png') }}" alt="Overlay Logo" class="overlay-logo">
        </section>

        
        <section class="what-is-section">
        <div class="paperboard-overlay"></div> 
        <div class="what-is-content">
            <div class="left-content">
                <img src="{{ asset('img/whatis.png') }}" alt="What is TKMDII">
                <img src="{{ asset('img/text_white.png') }}" alt="Text White">
            </div>
            <div class="right-content">
                <img src="{{ asset('img/image.png') }}" alt="Illustration">
            </div>
        </div>
    </section>
     <!-- #endregion -->