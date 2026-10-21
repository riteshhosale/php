<?php
session_start();
$_SESSION["user"] = "Ritesh";
$user = $_SESSION["user"];
session_write_close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Session Management</title>
<style>
:root{color-scheme:light;--page:#f3f6fb;--surface:#fff;--ink:#172033;--muted:#61708a;--accent:#3858d6;--accent-dark:#2743b5;--border:#dce3ef;--success-bg:#e8f8ef;--success-ink:#17643a;--shadow:0 16px 40px rgba(27,42,78,.09)}
*{box-sizing:border-box}
html{min-height:100%}
body{margin:0;padding:36px 18px;min-height:100vh;background:radial-gradient(circle at top left,#e6edff 0,transparent 38%),var(--page);color:var(--ink);font:16px/1.65 system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI",sans-serif}
main,.card{width:min(100%,760px);margin:0 auto}
h1,h2,h3{line-height:1.25;letter-spacing:-.025em}
h1{font-size:clamp(1.8rem,4vw,2.5rem);margin-top:0}
h2{font-size:clamp(1.35rem,3vw,1.8rem)}
p{color:var(--muted)}
.card,section.output,.output,pre{background:var(--surface);border:1px solid var(--border);border-radius:18px;padding:clamp(18px,4vw,30px);box-shadow:var(--shadow)}
.output{margin-top:18px;overflow-wrap:anywhere}
form{display:grid;gap:14px}
label{font-weight:600}
fieldset{border:1px solid var(--border);border-radius:12px;padding:14px;display:flex;flex-wrap:wrap;gap:14px}
legend{font-weight:700;padding:0 6px}
.choice{display:inline-flex;align-items:center;gap:7px;font-weight:500}
input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=reset]):not([type=button]),select,textarea{width:100%;max-width:100%;min-height:44px;border:1px solid #cbd5e5;border-radius:10px;padding:10px 12px;background:#fff;color:var(--ink);font:inherit}
input:focus,select:focus,textarea:focus{outline:3px solid rgba(56,88,214,.17);border-color:var(--accent)}
input[type=radio],input[type=checkbox]{accent-color:var(--accent)}
input[type=submit],input[type=reset],input[type=button],button,.button{border:0;border-radius:10px;padding:10px 17px;background:var(--accent);color:#fff;font:600 15px/1.3 system-ui,sans-serif;cursor:pointer;transition:background .18s ease,transform .18s ease}
input[type=reset],button.secondary{background:#e8edf6;color:var(--ink)}
input[type=submit]:hover,input[type=button]:hover,button:not(.secondary):hover,.button:hover{background:var(--accent-dark);transform:translateY(-1px)}
input[type=reset]:hover,button.secondary:hover{background:#dbe3f0}
.actions{display:flex;flex-wrap:wrap;gap:10px}
pre,code{font-family:ui-monospace,SFMono-Regular,Menlo,Consolas,monospace}
pre{overflow-x:auto;white-space:pre-wrap;overflow-wrap:anywhere}
table{width:100%;border-collapse:collapse;margin-top:14px;background:var(--surface);border-radius:12px;overflow:hidden}
th,td{padding:12px 15px;border-bottom:1px solid var(--border);text-align:left}
th{background:#eef2ff;color:#273b85}
tr:last-child td{border-bottom:0}
ul{padding-left:1.5rem}
li{margin:5px 0}
.tag{display:inline-block;margin:4px;padding:7px 12px;border-radius:999px;background:#eef2ff;color:#273b85;font-weight:600}
a{color:var(--accent);text-underline-offset:3px}
hr{border:0;border-top:1px solid var(--border);margin:24px 0}
small,.muted{color:var(--muted)}
.success,.message{padding:12px 15px;background:var(--success-bg);color:var(--success-ink);border-radius:10px}
@media(max-width:560px){body{padding:22px 12px}
.card,section.output,.output,pre{border-radius:14px;padding:16px}
th,td{padding:9px 10px}
}
</style>
</head>
<body>
<main class="card">
<h1>Session Management</h1>
<p class="message">Welcome <?= htmlspecialchars($user, ENT_QUOTES, "UTF-8") ?>
</p>
<p>This page stores a user value in a PHP session.</p>
<!-- Practical note: the heading identifies the concept demonstrated by this file. -->
<!-- Output note: PHP results are rendered in the main content card. -->
<!-- Styling note: responsive CSS is embedded in this same PHP file. -->
<!-- Testing note: run through a PHP-enabled server to see the output. -->
</main>
</body>
</html>
