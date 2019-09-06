@extends('layouts.app')
@section('title', 'Students Page')
@section('nav3', 'active')
@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-10">
            <?php
            // echo '<table style="color:maroon" class="table table-hover">' . PHP_EOL;
            foreach ($worksheet->getRowIterator() as $row) {
                // echo '<tr>' . PHP_EOL;
                $cellIterator = $row->getCellIterator();
                $cellIterator->setIterateOnlyExistingCells(TRUE); // This loops through all cells,
                //    even if a cell value is not set.
                // By default, only cells that have a value
                //    set will be iterated.
                // var_dump($cellIterator);
                // die;
                foreach ($cellIterator as $cell) {
                    // echo '<td>' .
                    $result[] = $cell->getValue();
                    // .
                    // '</td>' . PHP_EOL;
                }
                // echo '</tr>' . PHP_EOL;
            }
            var_dump($result);
            // echo '</table>' . PHP_EOL; 
            ?>
        </div>
    </div>
</div>
@endsection