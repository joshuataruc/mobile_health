var today = new Date().toISOString().split('T')[0];
document.getElementsByName("event_date")[0].setAttribute('min', today);