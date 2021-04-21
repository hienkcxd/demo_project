<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;

class SampleChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public ?string $name = 'sampleChart';

    public function handler(Request $request): Chartisan
    {
        return Chartisan::build()
            //first, second, third: tên cột hàng ngang
            ->labels(['First', 'Second', 'Third'])

            //Giá trị đối tượng 'giá đất'
            ->dataset('Giá Đất', [1, 2, 3,])

            //Giá trị đối tượng 'giá nhà'
            ->dataset('Giá Nhà', [3, 2, 1]);
        /* Số lượng cột hàng ngang phải trùng với số giá trị
        Nếu dư, chúng sẽ ko hiển thị, nhưng giá trị lớn nhất vẫn đc thể hiện */
    }
}
