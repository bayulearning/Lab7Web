<!DOCTYPE html> 
<html lang="en"> 
    <head> <meta charset="UTF-8"> 
    <title><?= $title ?? 'My Website' ?></title> 
    <link rel="stylesheet" href="<?= base_url('/style.css');?>"> 
    </head> 
<body> 
    <div class="container">
    <section id="wrapper" class="content-about">
        <section id="main">
            <?= $this->renderSection('content') ?> 
        </section> </section>    
        <aside id="sidebar" class="sidebar-content"> 
            <div class="widget-box"> 
                <?= view_cell('App\\Cells\\ArtikelTerkini::render') ?> 
                
            </div> 
            <div class="widget-box"> 
                <h3 class="title">Widget Text</h3> 
                <p>Vestibulum lorem elit, iaculis in nisl volutpat, malesuada tincidunt arcu. 
                    Proin in leo fringilla, vestibulum mi porta, faucibus felis. Integer pharetra est nunc,
                     nec pretium nunc pretium ac.</p> 
                    </div> 
        </aside>  
            </div>
            <footer> 
                <p>&copy; 2021 - Universitas Pelita Bangsa</p> 
            </footer> 
        
    </body> 
    </html>