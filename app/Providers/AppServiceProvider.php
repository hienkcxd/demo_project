<?php

    namespace App\Providers;

    use ConsoleTVs\Charts\Registrar as Charts;
    use Illuminate\Support\ServiceProvider;

    class AppServiceProvider extends ServiceProvider
    {
        // ...

        /**
         * Bootstrap any application services.
         * @param Charts $charts
         */
        public function boot(Charts $charts)
        {
            $charts->register([
                //co thể thêm registed nhiều chart ở đây
                \App\Charts\SampleChart::class,
            ]);
        }
    }
