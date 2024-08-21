<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Calendar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@3.10.0/dist/fullcalendar.min.css" />
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        #calendar {
            max-width: 600px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div id="calendar"></div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/moment@2.29.1/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.10.0/dist/fullcalendar.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');

            var events = JSON.parse(localStorage.getItem('events')) || [];

            var calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: ['dayGrid', 'interaction'],
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                events: events,
                selectable: true,
                select: function (info) {
                    var title = prompt('Event Title:');
                    if (title) {
                        var event = {
                            title: title,
                            start: info.start,
                            end: info.end
                        };
                        calendar.addEvent(event);
                        events.push(event);
                        saveEvents();
                    }
                    calendar.unselect();
                },
                eventClick: function (info) {
                    if (confirm('Delete event?')) {
                        calendar.getEventById(info.event.id).remove();
                        events = events.filter(e => e.id !== info.event.id);
                        saveEvents();
                    }
                },
                eventDrop: function (info) {
                    updateEvent(info);
                },
                eventResize: function (info) {
                    updateEvent(info);
                }
            });

            function updateEvent(info) {
                var event = calendar.getEventById(info.event.id);
                event.setProp('start', info.event.start);
                event.setProp('end', info.event.end);
                updateEventsArray();
            }

            function updateEventsArray() {
                events = calendar.getEvents().map(e => ({
                    id: e.id,
                    title: e.title,
                    start: e.start,
                    end: e.end
                }));
                saveEvents();
            }

            function saveEvents() {
                localStorage.setItem('events', JSON.stringify(events));
            }

            calendar.render();
        });
    </script>
    
</body>

</html>
