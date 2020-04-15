<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://rawgit.com/AuspeXeu/bootstrap-datetimepicker/master/js/bootstrap-datetimepicker.js"></script>
  <link href="https://rawgit.com/AuspeXeu/bootstrap-datetimepicker/master/css/bootstrap-datetimepicker.css" rel="stylesheet"/>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" rel="stylesheet"/>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
<input id="datepicker" type="text">


<script>
var disabledtimes_mapping = ["06/27/2020:8:30", "06/30/2020:17:30", "06/30/2020:15:10","06/30/2020:17:00"];

function formatDate(datestr)
{
    var date = new Date(datestr);
    var day = date.getDate(); day = day>9?day:"0"+day;
    var month = date.getMonth()+1; month = month>9?month:"0"+month;
    return month+"/"+day+"/"+date.getFullYear();
    
}

$("#datepicker").datetimepicker({
    format: 'MM/DD hh:ii',
    datesDisabled: ['2018-06-20'],
    autoclose: true,
    minuteStep: 30,
    clearBtn:true,
    
    onRenderMinute:function(date){
      
  if(disabledtimes_mapping.indexOf(formatDate(date)+":"+date.getUTCHours()+":"+date.getUTCMinutes())>-1)
    {
        
        return ['disabled'];
    }
    }
});
</script>
</body>
</html>