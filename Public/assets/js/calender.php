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
      events: "<?=routerConfig()?>/agendaapi", 

      eventClick: function(info){
       const viewModal =  new bootstrap.Modal(document.getElementById("visualziarModal"));

       document.getElementById("visualizar_id").innerHTML = info.event.id;
       document.getElementById("visualizar_paciente").innerHTML = info.event.title;
       document.getElementById("visualizar_dataStart").innerHTML = info.event.start.toLocaleString();
       document.getElementById("visualizar_dataEnd").innerHTML = info.event.end.toLocaleString();
       

       document.getElementById("event_id").value = info.event.id;
       document.getElementById("pacienteTitle").value = info.event.title;
       document.getElementById("dataConsulta").value = converterData(info.event.start);
       document.getElementById("horaConsulta").value = converterHora(info.event.start) ;
       document.getElementById("FimConsulta").value = converterHora(info.event.end);

       viewModal.show();

      },

      select: function(info){

        console.log(info);

        const cadastrarModal = new bootstrap.Modal(document.getElementById("CadastrarModal"));

        document.getElementById("dataModal1").value = info.startStr;

        cadastrarModal.show();
      }

    });


    calendar.render();

    function converterData(data) {

      // Converter a string em um objeto Date
      const dataObj = new Date(data);

      // Extrair o ano da data
      const ano = dataObj.getFullYear();

      // Obter o mês, mês começa de 0, padStart adiciona zeros à esquerda para garantir que o mês tenha dígitos
      const mes = String(dataObj.getMonth() + 1).padStart(2, '0');

      // Obter o dia do mês, padStart adiciona zeros à esquerda para garantir que o dia tenha dois dígitos
      const dia = String(dataObj.getDate()).padStart(2, '0');

      // Obter a hora, padStart adiciona zeros à esquerda para garantir que a hora tenha dois dígitos
      const hora = String(dataObj.getHours()).padStart(2, '0');

      // Obter minuto, padStart adiciona zeros à esquerda para garantir que o minuto tenha dois dígitos
      const minuto = String(dataObj.getMinutes()).padStart(2, '0');

      // Retornar a data
      return `${ano}-${mes}-${dia}`;
      }

      function converterHora(data) {

      // Converter a string em um objeto Date
      const dataObj = new Date(data);

      // Extrair o ano da data
      const ano = dataObj.getFullYear();

      // Obter o mês, mês começa de 0, padStart adiciona zeros à esquerda para garantir que o mês tenha dígitos
      const mes = String(dataObj.getMonth() + 1).padStart(2, '0');

      // Obter o dia do mês, padStart adiciona zeros à esquerda para garantir que o dia tenha dois dígitos
      const dia = String(dataObj.getDate()).padStart(2, '0');

      // Obter a hora, padStart adiciona zeros à esquerda para garantir que a hora tenha dois dígitos
      const hora = String(dataObj.getHours()).padStart(2, '0');

      // Obter minuto, padStart adiciona zeros à esquerda para garantir que o minuto tenha dois dígitos
      const minuto = String(dataObj.getMinutes()).padStart(2, '0');

      // Retornar a data
      return `${hora}:${minuto}`;
      }


    const btnEditar = document.getElementById("btnEditar");

    if(btnEditar){
      btnEditar.addEventListener("click", () => {
        document.getElementById("visualizarEvento").style.display = "none";
        document.getElementById("visualziarModalLabel").style.display = "none";

        document.getElementById("editarEvento").style.display = "block";
        document.getElementById("editarModalLabel").style.display = "block";
      })
    }

    const btnCancelar = document.getElementById("btnCancelar");

    if(btnCancelar){
      btnCancelar.addEventListener("click", () => {
        document.getElementById("visualizarEvento").style.display = "block";
        document.getElementById("visualziarModalLabel").style.display = "block";

        document.getElementById("editarEvento").style.display = "none";
        document.getElementById("editarModalLabel").style.display = "none";
      })
    }


  });

</script>