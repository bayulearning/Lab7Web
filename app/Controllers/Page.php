<?php
namespace App\Controllers;
class Page extends BaseController
{
public function home()
{
return view('home',[ 'title' => 'Halaman Home', 'content' => 'ini halaman home']);
}
public function about()
{
return view('about', [ 'title' => 'Halaman About', 'content' => 'Ini adalah halaman about yang menjelaskan tentang isi halaman ini.' ]);
}
public function contact()
{
    return view('contact', ['title' => 'Halaman Contact', 'content' => 'Ini adalah halaman contact yang menjelaskan tentang isi halaman ini.']);
// echo "Ini halaman Contact";
}
public function artikel()
{
    return view('artikel', ['title' => ' Halaman Artikel', 'content' => 'Ini adalah halaman artikel']);
}
public function faqs()
{
echo "Ini halaman FAQ";
}
public function tos()
{
echo "ini halaman Term of Services";
}
}
