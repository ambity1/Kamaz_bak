@extends('desktop_main')

@section('title', 'Башавтоком | Страница не найдена')

@section('content')
<main>
    <style>
        .notFound{
            padding: 70px 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 620px;
        }
        .notFound-img{
            max-height: 310px;
            /*width: 100%;*/
        }
        .notFound-content{
            display: flex;
            flex-direction: column;
            row-gap: 20px;
            column-gap: 40px;
            justify-content: center;
            align-items: center;
        }
        .notFound-content .desc{
            color: #8C8C8C;
            font-family: 'Noto Sans', sans-serif;
            font-size: 20px;
            font-weight: 400;
            line-height: 150%;
            margin-bottom: 0;
        }
        .notFound-content .text h1{
            color: #2C2F36;
            font-family: 'Dopis', sans-serif;
            font-size: 48px;
            font-weight: 700;
            line-height: 150%;
            margin-bottom: 0;
        }
        .notFound-content .text{
            row-gap: 20px;
            max-width: 486px;
        }
        @media (max-width: 768px) {
            .notFound-content .desc{
                font-size: 16px;
            }
            .notFound-content .text h1{
                font-size: 20px;
            }
            .notFound{
                min-height: 400px;
                padding: 35px 0;
            }
            .notFound-content{
                row-gap: 20px;
            }
            .notFound-img{
                max-height: 310px;
                width: 100%;
            }
            .notFound-content .text{
                max-width: 610px;
            }
        }
        @media (min-width: 768px) and (max-width: 992px) {
            .notFound{
                min-height: 650px;
                padding: 60px 0;
            }

            .notFound-content .text{
                max-width: 610px;
            }
        }
        @media (max-width: 1200px) {

            .notFound-content .text{
                max-width: 610px;
            }
        }
    </style>
    <div class="notFound">
        <div class="container d-flex align-items-center justify-content-center">
            <div class="notFound-content d-flex flex-xl-row-reverse flex-column">
                <img src="/media/404/bckg.jpg" alt="" class="notFound-img">
                <div class="text d-flex flex-column align-items-center align-items-xl-start">
                    <h1 class="mb-0 text-uppercase text-center text-xl-start">Страница не найдена</h1>
                    <p class="desc text-center text-xl-start">Страница, которую вы хотите открыть, к сожалению не найдена. Пожалуйста, вернитесь на главную страницу.</p>
                    <div>
                        <a href="/">
                            <div class="btn btn-trnsp-black">
                                Вернуться на главную
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection