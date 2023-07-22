@extends('layouts.app')
   @section('title', 'Dashboard')

   @section('page-title','Home')

  @section('content')
  <!-- Default box -->
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Title</h3>
       <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fa fa-times"></i></button>
      </div>
    </div>
    <div class="box-body">
      
      <script>
        var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
        var donutData = {
          labels: [
            

  
          ],
          datasets: [
            {
              data: [700,500,400,600,300,100],
              backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
  
            }
          ]
          
        }
        var donutOptions ={
          maintainAspectRatio : false,
          responsive : true,
        }
  
        new Chart(donutChartCanvas, {
          type: 'doughnut',
          data: donutData,
          options: donutOptions
        })
  
      </script>

    </div>
    <!-- /.box-body -->
    <div class="box-footer">
      Footer
    </div>
    <!-- /.box-footer-->
  </div>
  <!-- /.box -->

    
  @endsection