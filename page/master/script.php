<script src="../js/script.js"></script>

            <script src="../module/jquery/jquery-3.6.1.min.js"></script>
            <script src="../module/DataTables/js/jquery.dataTables.js"></script>
            <script src="../js/eventos/usuario/usuarios_admin.js"></script>
            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
            <script src="https://kit.fontawesome.com/1b1959dac0.js" crossorigin="anonymous"></script>
    
    
            <script>
    
                //menutoggle
                let toggle = document.querySelector('.toggle');
                let navigation=document.querySelector('.navigation');
                let main=document.querySelector('.main');
    
                toggle.onclick = function(){
                    navigation.classList.toggle('active');
                    main.classList.toggle('active');
                }
    
                let list=document.querySelectorAll('.navigation li ');
                function activelink(){
                    list.forEach((item)=>
                    item.classList.remove('hovered'));
                    this.classList.add('hovered')
                }
                list.forEach((item)=>
                item.addEventListener('mouseover',activelink));
            </script>
           
    </body>
    </html>