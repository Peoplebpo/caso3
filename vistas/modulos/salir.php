<?php

session_destroy();
echo "<script>

VoximplantKit.App.logout();
window.location='login';


</script>";