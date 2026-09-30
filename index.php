<?php
// preview/index.php - V8.1 بدون شعارات رسمية
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>DIGIDEALS - المنصات المؤسسية</title>
<style>
:root{--navy:#08122E;--gold:#C5A880;--bg:#f5f7fb}
body{margin:0;font-family:Tahoma;background:var(--bg);color:var(--navy)}
.header{background:var(--navy);color:#fff;padding:22px 20px;display:flex;justify-content:space-between}
.header b{color:var(--gold)}
.container{padding:20px;max-width:1100px;margin:auto}
.card{background:#fff;border-radius:16px;padding:20px;margin-bottom:18px;box-shadow:0 6px 20px rgba(0,0,0,.06);border-right:6px solid var(--gold)}
.badge{display:inline-block;padding:4px 10px;border-radius:20px;font-size:11px;font-weight:700}
.badge-master{background:var(--navy);color:var(--gold)}
.badge-bank{background:#E8F5E9;color:#2E7D32}
.badge-justice{background:#FFF3E0;color:#E65100}
.grid{display:grid;grid-template-columns:1fr;gap:16px}
@media(min-width:800px){.grid{grid-template-columns:1fr 1fr}}
a.btn{display:inline-block;margin-top:12px;background:var(--navy);color:var(--gold);padding:10px 18px;border-radius:10px;text-decoration:none;font-weight:700}
.small{color:#666;font-size:12px;margin-top:6px}
</style>
</head>
<body>
<div class="header"><div><b>DIGIDEALS.ONLINE</b> | مركز المنصات المؤسسية</div><div style="font-size:12px">نظام إدارة متكامل</div></div>
<div class="container">
<div class="card" style="border-color:#08122E">
<span class="badge badge-master">المنصة الرئيسية - MASTER PLATFORM</span>
<h2>إدارة التحكم الرئيسي</h2>
<p>الـ Brain - تتحكم في تشغيل المنصات وتعيين المدراء والتقارير</p>
<a class="btn" href="core/">دخول لوحة الإدارة العليا</a>
</div>
<div class="grid">
<div class="card">
<span class="badge badge-bank">منصة حساب الضمان المؤسسي</span>
<h3>Escrow Management</h3>
<p>إدارة الحسابات البنكية والصفقات المحمية</p>
<div class="small">المدير: موظف معين من قبل الإدارة المالية</div>
<a class="btn" href="escrow/">دخول منصة الضمان</a>
</div>
<div class="card">
<span class="badge badge-justice">منصة التوثيق المؤسسي</span>
<h3>Authentication Center</h3>
<p>إدارة الصكوك وتدقيقها وتوثيقها</p>
<div class="small">المدير: مدير التوثيق المعتمد</div>
<a class="btn" href="notary/">دخول منصة التوثيق</a>
</div>
</div>
<div class="card" style="margin-top:18px">
<span class="badge badge-master">لوحات التحكم - Control Panels</span>
<h3>اللوحات التشغيلية (منفصلة إدارياً)</h3>
<div class="grid" style="margin-top:12px">
<div>🟦 <b>المشتري buyer/</b></div>
<div>🟩 <b>البائع seller/</b></div>
<div>🟨 <b>المسوق marketer/</b></div>
<div>🟥 <b>الموثق notary/</b></div>
</div>
</div>
<div style="text-align:center;margin:20px"><a href="../?logout" style="color:#999;font-size:12px">خروج وتفعيل الصيانة</a></div>
</div>
</body>
</html>