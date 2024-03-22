<?=$this->layout('themes/index', ['title' => $title]);?>

<script>

document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        themeSystem: 'bootstrap5',
        headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay',
        
      },
      
      locale: 'pt-br',
      //initialDate: '2023-01-12',
      navLinks: true, // can click day/week names to navigate views
      selectable: true,
      selectMirror: true,

      editable: true,
      dayMaxEvents: true, // allow "more" link when too many events
      events: "<?=routerConfig()?>/agendaapi"
    });

    calendar.render();
  });

</script>

<h2 class="font-bold">
 Agenda
</h2>

<hr>

<section class="container">
<div id='calendar'></div>    
</section>
