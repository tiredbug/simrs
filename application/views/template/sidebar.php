<?php
        // display all data main menu
        $this->db->where('is_main_menu',0);
        $this->db->where('is_aktif','y');
        $main_menu = $this->db->get('tbl_menu')->result();
        
        foreach ($main_menu as $menu){
            // chek is have sub menu
            $this->db->where('is_main_menu',$menu->id_menu);
            $this->db->where('is_aktif','y');
            $submenu = $this->db->get('tbl_menu');
            if($submenu->num_rows()>0){
                // display sub menu
                echo "<li>
                            <a href='#2' data-toggle='collapse' class='collapsed'><i class='$menu->icon'></i> <span>".strtoupper($menu->title)."</span> <i class='icon-submenu lnr lnr-chevron-left'></i></a>
                            <div id='2' class='collapse'>
                                <ul class='nav'>";
                                   foreach ($submenu->result() as $sub){
                            echo "<li>".anchor($sub->url,"<i class='$sub->icon'></i> ".strtoupper($sub->title))."</li>"; 
                        }
                        echo" </ul>
                    </li>
                    ";
            }else{
                // display main menu
                echo "<li>";
                echo anchor($menu->url,"<i class='".$menu->icon."'></i> ".strtoupper($menu->title));
                echo "</li>";
            }
        }
        ?>