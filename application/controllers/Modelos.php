<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Modelos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library(array(
            'session',
            'r_session',
            'form_validation',
            'excel'
        ));
        $this->load->model(array(
            'modelos_model',
            'pelos_model',
            'ojos_model',
            'pieles_model',
            'idiomas_model',
            'paises_model',
            'provincias_model',
            'ciudades_model',
            'barrios_model'
        ));
    }

    public function listar($estado = 'habilitado') {
        $session = $this->session->all_userdata();
        $this->r_session->check($session);

        $data['session'] = $this->session->all_userdata();
        $data['javascript'] = array(
            '/assets/modulos/modelos/js/listar.js'
        );
        $data['menu'] = 2;


        $where = $this->input->get();
        if (!isset($where['estado'])) {
            $where['estado'] = $estado;
        }
        $data['estado'] = $where['estado'];

        if ($this->input->get('estado') == 'todas') {
            $where = array(
                'estado != "borrado" AND estado !=' => 'redireccionado'
            );
        }

        $data['modelos'] = $this->modelos_model->gets_where($where);


        $this->load->view('layout/header', $data);
        $this->load->view('layout/menu');
        $this->load->view('modelos/listar');
        $this->load->view('layout/footer');
    }

    public function agregar() {
        $session = $this->session->all_userdata();
        $this->r_session->check($session);

        $data['session'] = $this->session->all_userdata();
        $data['javascript'] = array(
            '/assets/modulos/modelos/js/agregar.js'
        );
        $data['menu'] = 3;

        $data['pelos'] = $this->pelos_model->gets();
        $data['ojos'] = $this->ojos_model->gets();
        $data['pieles'] = $this->pieles_model->gets();
        $data['idiomas'] = $this->idiomas_model->gets();
        $data['paises'] = $this->paises_model->gets();
        $data['provincias'] = $this->provincias_model->gets();
        $data['ciudades'] = $this->ciudades_model->gets();
        $data['barrios'] = $this->barrios_model->gets();

        $this->load->view('layout/header', $data);
        $this->load->view('layout/menu');
        $this->load->view('modelos/agregar');
        $this->load->view('layout/footer');
    }

    public function agregar_ajax() {
        $session = $this->session->all_userdata();
        $this->r_session->check($session);

        $this->form_validation->set_rules('nombre_real', 'Nombre Real', 'required');
        $this->form_validation->set_rules('documento', 'Documento', 'required');
        $this->form_validation->set_rules('apellido', 'Apellido', 'required');
        $this->form_validation->set_rules('fecha_nacimiento', 'Fecha de Nacimiento', 'required');
        $this->form_validation->set_rules('nombre', 'Nombre en Sitio Web', 'required');
        $this->form_validation->set_rules('altura', 'Altura', 'required');
        $this->form_validation->set_rules('medidas1', 'Medidas 1', 'required|integer');
        $this->form_validation->set_rules('medidas2', 'Medidas 2', 'required|integer');
        $this->form_validation->set_rules('medidas3', 'Medidas 3', 'required|integer');
        $this->form_validation->set_rules('prefijo1', 'Tipo de Teléfono', 'required');
        $this->form_validation->set_rules('telefono1', 'Teléfono 1', 'required');
        $this->form_validation->set_rules('idioma1', 'Idioma 1', 'required');

        if ($this->form_validation->run() == FALSE) {
            $json = array(
                'status' => 'error',
                'data' => validation_errors()
            );
            echo json_encode($json);
        } else {
            $datos = array(
                'nombre_real' => $this->input->post('nombre_real'),
                'documento' => $this->input->post('documento'),
                'apellido' => $this->input->post('apellido'),
                'fecha_nacimiento' => $this->formatear_fecha($this->input->post('fecha_nacimiento')),
                'nombre' => $this->input->post('nombre'),
                'perfil' => $this->input->post('perfil'),
                'membresia' => $this->input->post('membresia'),
                'ranking' => $this->input->post('ranking'),
                'altura' => $this->input->post('altura'),
                'alturapareja' => $this->input->post('alturapareja'),
                'medidas1' => $this->input->post('medidas1'),
                'medidas2' => $this->input->post('medidas2'),
                'medidas3' => $this->input->post('medidas3'),
                'medidaspareja' => $this->input->post('medidaspareja'),
                'peso' => $this->input->post('peso'),
                'colordeojos' => $this->input->post('colordeojos'),
                'colordepelo' => $this->input->post('colordepelo'),
                'colordepiel' => $this->input->post('colordepiel'),
                'idiomas' => $this->input->post('idioma1') . ',' . $this->input->post('idioma2') . ',' . $this->input->post('idioma3') . ',' . $this->input->post('idioma4'),
                'descripcion_platy' => $this->input->post('descripcion'),
                'prefijo1' => $this->input->post('prefijo1'),
                'telefono1' => $this->input->post('telefono1'),
                'prefijo2' => $this->input->post('prefijo2'),
                'telefono2' => $this->input->post('telefono2'),
                'prefijo3' => $this->input->post('prefijo3'),
                'telefono3' => $this->input->post('telefono3'),
                'email' => $this->input->post('email'),
                'sitioweb' => $this->input->post('sitioweb'),
                'email_privado' => $this->input->post('email_privado'),
                'pais' => $this->input->post('pais'),
                'provincia' => $this->input->post('provincia'),
                'ciudad' => $this->input->post('ciudad'),
                'barrio' => $this->input->post('barrio'),
                'proximidad' => $this->input->post('proximidad'),
                'fulltime' => $this->input->post('fulltime'),
                'ciudad_exterior' => $this->input->post('ciudad_exterior'),
                'disponible' => $this->input->post('disponible'),
                'publica_masajes' => $this->input->post('publica_masajes'),
                'publica_fantasias' => $this->input->post('publica_fantasias'),
                'publica_maduras' => $this->input->post('publica_maduras'),
                'observaciones' => $this->input->post('observaciones'),
                'con_lugar' => $this->input->post('con_lugar'),
                'a_domicilio' => $this->input->post('a_domicilio'),
                'a_hotel' => $this->input->post('a_hotel'),
                'fuma' => $this->input->post('fuma'),
                'baila' => $this->input->post('baila'),
                'ho' => $this->input->post('ho'),
                'mu' => $this->input->post('mu'),
                'ho_mu' => $this->input->post('ho_mu'),
                'viaja' => $this->input->post('viaja'),
                'visa_usa' => $this->input->post('visa_usa'),
                'descripcion_ebcom' => $this->input->post('descripcion_ebcom'),
                'comidas' => $this->input->post('comidas'),
                'hobbies' => $this->input->post('hobbies'),
                'musica' => $this->input->post('musica'),
                'deportes' => $this->input->post('deportes'),
                'nogusta' => $this->input->post('nogusta'),
                'personalidad' => $this->input->post('personalidad'),
                'duermo' => $this->input->post('duermo'),
                'lugares' => $this->input->post('lugares'),
                'descripcion_ebcomar' => $this->input->post('descripcion_ebcomar'),
                'comidas2' => $this->input->post('comidas2'),
                'hobbies2' => $this->input->post('hobbies2'),
                'musica2' => $this->input->post('musica2'),
                'deportes2' => $this->input->post('deportes2'),
                'nogusta2' => $this->input->post('nogusta2'),
                'personalidad2' => $this->input->post('personalidad2'),
                'lugares2' => $this->input->post('lugares2'),
                'fecha_ingreso' => date("Y-m-d H:i:s"),
                'fecha_actualizacion' => date("Y-m-d H:i:s"),
                'estado' => 'habilitado',
                'fotos_platy' => '',
                'cant_fotos_ebcom' => $this->input->post('cant_fotos_ebcom'),
                'cant_bigpics' => $this->input->post('cant_bigpics'),
                'girl' => $this->input->post('girl')
            );

            if ($this->input->post('mensaje1') == 'on') {
                $datos['mensaje1'] = 'S';
            } else {
                $datos['mensaje1'] = 'N';
            }
            if ($this->input->post('whatsapp1') == 'on') {
                $datos['whatsapp1'] = 'S';
            } else {
                $datos['whatsapp1'] = 'N';
            }
            if ($this->input->post('llamadaprivada1') == 'on') {
                $datos['llamadaprivada1'] = 'S';
            } else {
                $datos['llamadaprivada1'] = 'N';
            }

            if ($this->input->post('mensaje2') == 'on') {
                $datos['mensaje2'] = 'S';
            } else {
                $datos['mensaje2'] = 'N';
            }
            if ($this->input->post('whatsapp2') == 'on') {
                $datos['whatsapp2'] = 'S';
            } else {
                $datos['whatsapp2'] = 'N';
            }
            if ($this->input->post('llamadaprivada2') == 'on') {
                $datos['llamadaprivada2'] = 'S';
            } else {
                $datos['llamadaprivada2'] = 'N';
            }

            if ($this->input->post('mensaje3') == 'on') {
                $datos['mensaje3'] = 'S';
            } else {
                $datos['mensaje3'] = 'N';
            }
            if ($this->input->post('whatsapp3') == 'on') {
                $datos['whatsapp3'] = 'S';
            } else {
                $datos['whatsapp3'] = 'N';
            }
            if ($this->input->post('llamadaprivada3') == 'on') {
                $datos['llamadaprivada3'] = 'S';
            } else {
                $datos['llamadaprivada3'] = 'N';
            }

            $flag = true;
            while ($flag) {
                $where = array(
                    'carpeta' => $this->generateRandomString(20)
                );
                $resultado = $this->modelos_model->get_where($where);
                if (!$resultado) {
                    $datos['carpeta'] = $where['carpeta'];
                    $flag = false;
                }
            }

            $resultado = $this->modelos_model->set($datos);
            //$resultado = null;
            if ($resultado) {
                $datos = array(
                    'status' => 'ok',
                    'data' => 'Se agregó correctamente la modelo',
                    'id' => $resultado
                );
                echo json_encode($datos);
            } else {
                $datos = array(
                    'status' => 'error',
                    'data' => 'No se pudo agregar la modelo'
                );
                echo json_encode($datos);
            }
        }
    }

    public function ver($idmodelo = null) {
        if ($idmodelo == null) {
            redirect('/web/pagina/', 'refresh');
        }

        $where = array(
            'modelos.ID' => $idmodelo
        );
        $data['modelo'] = $this->modelos_model->get_where($where);

        $data['perfil'] = '';

        $this->load->view('layout_web/header', $data);
        $this->load->view('modelos/ver');
        $this->load->view('layout_web/footer');
    }

    public function agregar_fotos($idmodelo = null) {
        $session = $this->session->all_userdata();
        $this->r_session->check($session);

        if ($idmodelo == null) {
            redirect('/modelos/listar/', 'refresh');
        }

        $data['session'] = $this->session->all_userdata();
        $data['javascript'] = array(
            '/assets/modulos/modelos/js/agregar_fotos.js'
        );
        $data['menu'] = 3;

        $where = array(
            'modelos.ID' => $idmodelo
        );
        $data['modelo'] = $this->modelos_model->get_where($where);

        $this->load->view('layout/header', $data);
        $this->load->view('layout/menu');
        $this->load->view('modelos/agregar_fotos');
        $this->load->view('layout/footer');
    }

    public function agregar_fotos_ajax() {
        $session = $this->session->all_userdata();
        $this->r_session->check($session);

        $this->form_validation->set_rules('idmodelo', 'ID Modelo', 'required|integer');

        //echo "<pre>";
        if ($this->form_validation->run() == FALSE) {
            
        } else {
            $where = array(
                'modelos.ID' => $this->input->post('idmodelo')
            );
            $modelo = $this->modelos_model->get_where($where);

            $archivos = explode(',', $modelo['fotos_platy']);
            $nombre_archivo = null;
            $numero_foto = null;
            $flag = true;

            //print_r($archivos);

            for ($i = 1; $flag; $i++) {
                //var_dump(array_search(str_pad($i, 2, '0', STR_PAD_LEFT), $archivos));
                //var_dump($i);

                if (array_search(str_pad($i, 2, '0', STR_PAD_LEFT), $archivos) == FALSE) {
                    $numero_foto = str_pad($i, 2, '0', STR_PAD_LEFT);
                    $nombre_archivo = $modelo['carpeta'] . $numero_foto;
                    //var_dump('en el if');
                    //var_dump($nombre_archivo);

                    $flag = false;
                }
            }


            $filesCount = count($_FILES['files']['name']);
            for ($i = 0; $i < $filesCount; $i++) {
                $_FILES['file']['name'] = $_FILES['files']['name'][$i];
                $_FILES['file']['type'] = $_FILES['files']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                $_FILES['file']['error'] = $_FILES['files']['error'][$i];
                $_FILES['file']['size'] = $_FILES['files']['size'][$i];

                $f = explode('.', $_FILES['file']['name']);

                $config['upload_path'] = './Fotodisk/' . $modelo['perfil'] . '/' . $modelo['carpeta'] . '/';
                $config['allowed_types'] = 'jpg';
                $config['file_name'] = $nombre_archivo . '.' . $f[1];
                $config['owerwrite'] = TRUE;

                if (!is_dir('Fotodisk')) {
                    mkdir('./Fotodisk', 0777, TRUE);
                }
                if (!is_dir('Fotodisk/' . $modelo['perfil'])) {
                    mkdir('./Fotodisk/' . $modelo['perfil'], 0777, TRUE);
                }
                if (!is_dir('Fotodisk/' . $modelo['perfil'] . '/' . $modelo['carpeta'])) {
                    mkdir('./Fotodisk/' . $modelo['perfil'] . '/' . $modelo['carpeta'], 0777, TRUE);
                }

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('file')) {
                    $error = array('error' => $this->upload->display_errors());
                    //print_r($error);
                } else {
                    $data = array('upload_data' => $this->upload->data());
                    $archivos = explode(',', $modelo['fotos_platy']);
                    $archivos[] = $numero_foto;
                    $datos = array(
                        'fotos_platy' => implode(',', $archivos)
                    );
                    $where = array(
                        'ID' => $this->input->post('idmodelo')
                    );
                    $this->modelos_model->update($datos, $where);

                    echo $numero_foto;
                    //print_r($data);
                }
            }




            /*
              $this->load->library('upload', $config);
              if (!$this->upload->do_upload()) {
              $error = array('error' => $this->upload->display_errors());
              print_r($error);
              } else {
              $data = array('upload_data' => $this->upload->data());
              print_r($data);
              } */
        }

        //echo "</pre>";
    }

    public function agregar_videos_ajax() {
        $session = $this->session->all_userdata();
        $this->r_session->check($session);

        $this->form_validation->set_rules('idmodelo', 'ID Modelo', 'required|integer');

        if ($this->form_validation->run() == FALSE) {
            
        } else {
            $where = array(
                'modelos.ID' => $this->input->post('idmodelo')
            );
            $modelo = $this->modelos_model->get_where($where);

            $filesCount = count($_FILES['files']['name']);
            for ($i = 0; $i < $filesCount; $i++) {
                $_FILES['file']['name'] = $_FILES['files']['name'][$i];
                $_FILES['file']['type'] = $_FILES['files']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                $_FILES['file']['error'] = $_FILES['files']['error'][$i];
                $_FILES['file']['size'] = $_FILES['files']['size'][$i];

                $f = explode('.', $_FILES['file']['name']);

                $config['upload_path'] = './upload/videos/';
                $config['allowed_types'] = '*';
                $config['encrypt_name'] = TRUE;

                if (!is_dir('upload')) {
                    mkdir('./upload', 0777, TRUE);
                }
                if (!is_dir('upload/videos')) {
                    mkdir('./upload/videos', 0777, TRUE);
                }


                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('file')) {
                    $error = array('error' => $this->upload->display_errors());
                    print_r($error);
                } else {
                    $data = array('upload_data' => $this->upload->data());

                    $datos = array(
                        'idmodelo' => $this->input->post('idmodelo'),
                        'video' => $data['upload_data']['raw_name'] . $data['upload_data']['file_ext']
                    );
                    $this->modelos_model->set_video($datos);

                    print_r($data);
                }
            }
        }
    }

    public function gets_archivos() {
        $session = $this->session->all_userdata();
        $this->r_session->check($session);

        $where = array(
            'modelos.ID' => $this->input->post('idmodelo')
        );
        $data['modelo'] = $this->modelos_model->get_where($where);

        $this->load->view('modelos/gets_archivos', $data);
    }

    public function gets_videos() {
        $session = $this->session->all_userdata();
        $this->r_session->check($session);

        $where = array(
            'videos.idmodelo' => $this->input->post('idmodelo'),
            'videos.estado' => 'A'
        );
        $data['videos'] = $this->modelos_model->gets_videos_where($where);

        $this->load->view('modelos/gets_videos', $data);
    }

    public function borrar_video() {
        $session = $this->session->all_userdata();
        $this->r_session->check($session);

        $this->form_validation->set_rules('idvideo', 'ID Video', 'required|integer');

        if ($this->form_validation->run() == FALSE) {
            $json = array(
                'status' => 'error',
                'data' => validation_errors()
            );
            echo json_encode($json);
        } else {
            $datos = array(
                'estado' => 'I'
            );
            $where = array(
                'idvideo' => $this->input->post('idvideo')
            );
            $resultado = $this->modelos_model->update_video($datos, $where);
            if ($resultado) {
                $json = array(
                    'status' => 'ok',
                    'data' => 'Se eliminó el video correctamente'
                );
                echo json_encode($json);
            } else {
                $json = array(
                    'status' => 'error',
                    'data' => 'No se pudo eliminar el video'
                );
                echo json_encode($json);
            }
        }
    }

    public function borrar_foto() {
        $session = $this->session->all_userdata();
        $this->r_session->check($session);

        $this->form_validation->set_rules('idfoto', 'ID Foto', 'required|integer');
        $this->form_validation->set_rules('idmodelo', 'ID Modelo', 'required|integer');

        if ($this->form_validation->run() == FALSE) {
            $json = array(
                'status' => 'error',
                'data' => validation_errors()
            );
            echo json_encode($json);
        } else {
            $where = array(
                'modelos.ID' => $this->input->post('idmodelo')
            );

            $modelo = $this->modelos_model->get_where($where);

            $fotos = explode(",", $modelo['fotos_platy']);

            foreach ($fotos as $key => $value) {
                if ($value == $this->input->post('idfoto')) {
                    unset($fotos[$key]);
                }
            }

            $datos = array(
                'fotos_platy' => implode(",", $fotos)
            );
            $where = array(
                'ID' => $this->input->post('idmodelo')
            );
            $resultado = $this->modelos_model->update($datos, $where);

            if ($resultado) {
                unlink("./Fotodisk/" . $modelo['perfil'] . "/" . $modelo['carpeta'] . "/" . $modelo['carpeta'] . $this->input->post('idfoto') . ".jpg");
                unlink("./Fotodisk/" . $modelo['perfil'] . "/" . $modelo['carpeta'] . "/" . $modelo['carpeta'] . $this->input->post('idfoto') . "Thumb.jpg");

                $json = array(
                    'status' => 'ok',
                    'data' => 'Se eliminó la foto correctamente'
                );
                echo json_encode($json);
            } else {
                $json = array(
                    'status' => 'error',
                    'data' => 'No se pudo eliminar la foto'
                );
                echo json_encode($json);
            }
        }
    }

    public function modificar($idmodelo = null) {
        $session = $this->session->all_userdata();
        $this->r_session->check($session);

        if ($idmodelo == null) {
            redirect('/modelos/listar/', 'refresh');
        }
        $data['session'] = $this->session->all_userdata();
        $data['javascript'] = array(
            '/assets/modulos/modelos/js/modificar.js'
        );
        $data['menu'] = 3;


        $data['pelos'] = $this->pelos_model->gets();
        $data['ojos'] = $this->ojos_model->gets();
        $data['pieles'] = $this->pieles_model->gets();
        $data['idiomas'] = $this->idiomas_model->gets();
        $data['paises'] = $this->paises_model->gets();
        $data['provincias'] = $this->provincias_model->gets();
        $data['ciudades'] = $this->ciudades_model->gets();
        $data['barrios'] = $this->barrios_model->gets();

        $datos = array(
            'modelos.ID' => $idmodelo
        );
        $data['modelo'] = $this->modelos_model->get_where($datos);
        $data['modelo']['fecha_nacimiento_formateada'] = $this->formatear_fecha_para_mostrar($data['modelo']['fecha_nacimiento']);

        $this->load->view('layout/header', $data);
        $this->load->view('layout/menu');
        $this->load->view('modelos/modificar');
        $this->load->view('layout/footer');
    }

    public function modificar_ajax() {
        $session = $this->session->all_userdata();
        $this->r_session->check($session);

        $this->form_validation->set_rules('idmodelo', 'ID Modelo', 'required|integer');
        $this->form_validation->set_rules('nombre_real', 'Nombre Real', 'required');
        $this->form_validation->set_rules('documento', 'Documento', 'required');
        $this->form_validation->set_rules('apellido', 'Apellido', 'required');
        $this->form_validation->set_rules('fecha_nacimiento', 'Fecha de Nacimiento', 'required');
        $this->form_validation->set_rules('nombre', 'Nombre en Sitio Web', 'required');
        $this->form_validation->set_rules('altura', 'Altura', 'required');
        $this->form_validation->set_rules('medidas1', 'Medidas 1', 'required|integer');
        $this->form_validation->set_rules('medidas2', 'Medidas 2', 'required|integer');
        $this->form_validation->set_rules('medidas3', 'Medidas 3', 'required|integer');
        $this->form_validation->set_rules('prefijo1', 'Tipo de Teléfono', 'required');
        $this->form_validation->set_rules('telefono1', 'Teléfono 1', 'required');
        $this->form_validation->set_rules('idioma1', 'Idioma 1', 'required');

        if ($this->form_validation->run() == FALSE) {
            $json = array(
                'status' => 'error',
                'data' => validation_errors()
            );
            echo json_encode($json);
        } else {
            $flag = true;

            $where = array(
                'modelos.nombre' => $this->input->post('nombre'),
                'modelos.ID <>' => $this->input->post('idmodelo')
            );
            $resultado = $this->modelos_model->get_where($where);
            if ($resultado) {
                $flag = false;
                $json = array(
                    'status' => 'error',
                    'data' => 'El nombre ' . $this->input->post('nombre') . ' ya existe en la base de datos.'
                );
                echo json_encode($json);
                return 0;
            }

            $where = array(
                'modelos.documento' => $this->input->post('documento'),
                'modelos.ID <>' => $this->input->post('idmodelo')
            );
            $resultado = $this->modelos_model->get_where($where);
            if ($resultado) {
                $flag = false;
                $json = array(
                    'status' => 'error',
                    'data' => 'El documento ' . $this->input->post('documento') . ' ya existe en la base de datos.'
                );
                echo json_encode($json);
                return 0;
            }

            if ($flag) {
                $datos = array(
                    'nombre_real' => $this->input->post('nombre_real'),
                    'documento' => $this->input->post('documento'),
                    'apellido' => $this->input->post('apellido'),
                    'fecha_nacimiento' => $this->formatear_fecha($this->input->post('fecha_nacimiento')),
                    'nombre' => $this->input->post('nombre'),
                    'perfil' => $this->input->post('perfil'),
                    'membresia' => $this->input->post('membresia'),
                    'ranking' => $this->input->post('ranking'),
                    'altura' => $this->input->post('altura'),
                    'alturapareja' => $this->input->post('alturapareja'),
                    'medidas1' => $this->input->post('medidas1'),
                    'medidas2' => $this->input->post('medidas2'),
                    'medidas3' => $this->input->post('medidas3'),
                    'medidaspareja' => $this->input->post('medidaspareja'),
                    'peso' => $this->input->post('peso'),
                    'colordeojos' => $this->input->post('colordeojos'),
                    'colordepelo' => $this->input->post('colordepelo'),
                    'colordepiel' => $this->input->post('colordepiel'),
                    'idiomas' => $this->input->post('idioma1') . ',' . $this->input->post('idioma2') . ',' . $this->input->post('idioma3') . ',' . $this->input->post('idioma4'),
                    'descripcion_platy' => $this->input->post('descripcion'),
                    'prefijo1' => $this->input->post('prefijo1'),
                    'telefono1' => $this->input->post('telefono1'),
                    'prefijo2' => $this->input->post('prefijo2'),
                    'telefono2' => $this->input->post('telefono2'),
                    'prefijo3' => $this->input->post('prefijo3'),
                    'telefono3' => $this->input->post('telefono3'),
                    'email' => $this->input->post('email'),
                    'sitioweb' => $this->input->post('sitioweb'),
                    'email_privado' => $this->input->post('email_privado'),
                    'pais' => $this->input->post('pais'),
                    'provincia' => $this->input->post('provincia'),
                    'ciudad' => $this->input->post('ciudad'),
                    'barrio' => $this->input->post('barrio'),
                    'proximidad' => $this->input->post('proximidad'),
                    'fulltime' => $this->input->post('fulltime'),
                    'ciudad_exterior' => $this->input->post('ciudad_exterior'),
                    'disponible' => $this->input->post('disponible'),
                    'publica_masajes' => $this->input->post('publica_masajes'),
                    'publica_fantasias' => $this->input->post('publica_fantasias'),
                    'publica_maduras' => $this->input->post('publica_maduras'),
                    'observaciones' => $this->input->post('observaciones'),
                    'con_lugar' => $this->input->post('con_lugar'),
                    'a_domicilio' => $this->input->post('a_domicilio'),
                    'a_hotel' => $this->input->post('a_hotel'),
                    'fuma' => $this->input->post('fuma'),
                    'baila' => $this->input->post('baila'),
                    'ho' => $this->input->post('ho'),
                    'mu' => $this->input->post('mu'),
                    'ho_mu' => $this->input->post('ho_mu'),
                    'viaja' => $this->input->post('viaja'),
                    'visa_usa' => $this->input->post('visa_usa'),
                    'descripcion_ebcom' => $this->input->post('descripcion_ebcom'),
                    'comidas' => $this->input->post('comidas'),
                    'hobbies' => $this->input->post('hobbies'),
                    'musica' => $this->input->post('musica'),
                    'deportes' => $this->input->post('deportes'),
                    'nogusta' => $this->input->post('nogusta'),
                    'personalidad' => $this->input->post('personalidad'),
                    'duermo' => $this->input->post('duermo'),
                    'lugares' => $this->input->post('lugares'),
                    'descripcion_ebcomar' => $this->input->post('descripcion_ebcomar'),
                    'comidas2' => $this->input->post('comidas2'),
                    'hobbies2' => $this->input->post('hobbies2'),
                    'musica2' => $this->input->post('musica2'),
                    'deportes2' => $this->input->post('deportes2'),
                    'nogusta2' => $this->input->post('nogusta2'),
                    'personalidad2' => $this->input->post('personalidad2'),
                    'lugares2' => $this->input->post('lugares2'),
                    'fecha_actualizacion' => date("Y-m-d H:i:s"),
                    'cant_fotos_ebcom' => $this->input->post('cant_fotos_ebcom'),
                    'cant_bigpics' => $this->input->post('cant_bigpics'),
                    'girl' => $this->input->post('girl')
                );

                if ($this->input->post('mensaje1') == 'on') {
                    $datos['mensaje1'] = 'S';
                } else {
                    $datos['mensaje1'] = 'N';
                }
                if ($this->input->post('whatsapp1') == 'on') {
                    $datos['whatsapp1'] = 'S';
                } else {
                    $datos['whatsapp1'] = 'N';
                }
                if ($this->input->post('llamadaprivada1') == 'on') {
                    $datos['llamadaprivada1'] = 'S';
                } else {
                    $datos['llamadaprivada1'] = 'N';
                }

                if ($this->input->post('mensaje2') == 'on') {
                    $datos['mensaje2'] = 'S';
                } else {
                    $datos['mensaje2'] = 'N';
                }
                if ($this->input->post('whatsapp2') == 'on') {
                    $datos['whatsapp2'] = 'S';
                } else {
                    $datos['whatsapp2'] = 'N';
                }
                if ($this->input->post('llamadaprivada2') == 'on') {
                    $datos['llamadaprivada2'] = 'S';
                } else {
                    $datos['llamadaprivada2'] = 'N';
                }

                if ($this->input->post('mensaje3') == 'on') {
                    $datos['mensaje3'] = 'S';
                } else {
                    $datos['mensaje3'] = 'N';
                }
                if ($this->input->post('whatsapp3') == 'on') {
                    $datos['whatsapp3'] = 'S';
                } else {
                    $datos['whatsapp3'] = 'N';
                }
                if ($this->input->post('llamadaprivada3') == 'on') {
                    $datos['llamadaprivada3'] = 'S';
                } else {
                    $datos['llamadaprivada3'] = 'N';
                }

                $where = array(
                    'ID' => $this->input->post('idmodelo')
                );

                $resultado = $this->modelos_model->update($datos, $where);
                //$resultado = null;
                if ($resultado) {
                    $datos = array(
                        'status' => 'ok',
                        'data' => 'Se modificó correctamente la modelo',
                        'id' => $resultado
                    );
                    echo json_encode($datos);
                } else {
                    $datos = array(
                        'status' => 'error',
                        'data' => 'No se pudo modificar la modelo'
                    );
                    echo json_encode($datos);
                }
            }
        }
    }

    public function modificar_estado_modelo($idmodelo = null, $estado = null) {
        $session = $this->session->all_userdata();
        $this->r_session->check($session);

        if ($idmodelo == null || $estado == null) {
            redirect('/modelos/listar/', 'refresh');
        } else {
            $datos = array(
                'estado' => $estado
            );
            $where = array(
                'ID' => $idmodelo
            );

            $this->modelos_model->update($datos, $where);

            redirect('/modelos/listar/', 'refresh');
        }
    }

    public function ordenar($perfil = 'A-MujeresModelos') {
        $session = $this->session->all_userdata();
        $this->r_session->check($session);

        $data['session'] = $this->session->all_userdata();
        $data['css'] = array(
            '/assets/modulos/modelos/css/ordenar.css'
        );
        $data['javascript'] = array(
            '/assets/vendors/Nestable-master/jquery.nestable.js',
            '/assets/modulos/modelos/js/ordenar.js'
        );
        $data['menu'] = 8;

        $where = array(
            'perfil' => $perfil,
            'estado' => 'habilitado'
        );
        $or_where = array(
            'estado' => 'deshabilitado'
        );
        
        $data['modelos'] = $this->modelos_model->gets_where_or_where($where, $or_where);
        $data['perfil'] = $perfil;

        $this->load->view('layout/header', $data);
        $this->load->view('layout/menu');
        $this->load->view('modelos/ordenar');
        $this->load->view('layout/footer');
    }

    public function actualizar_orden() {
        $session = $this->session->all_userdata();
        $this->r_session->check($session);

        $orden = json_decode($this->input->post('orden'));
        $i = 1;
        foreach ($orden as $o) {
            $datos = array(
                'orden' => $i
            );
            $where = array(
                'ID' => $o->id
            );

            $this->modelos_model->update($datos, $where);

            $i++;
        }
        $datos = array(
            'status' => 'ok',
            'data' => 'Se actualizó correctamente'
        );
        echo json_encode($datos);
    }

    public function thumb($idmodelo = null, $idfoto = null) {
        $session = $this->session->all_userdata();
        $this->r_session->check($session);

        $data['session'] = $this->session->all_userdata();
        $data['css'] = array(
            '/assets/vendors/cropper-master/dist/cropper.css'
        );
        $data['javascript'] = array(
            '/assets/vendors/cropper-master/dist/cropper.js',
            '/assets/modulos/modelos/js/thumb.js'
        );
        $data['menu'] = null;

        $where = array(
            'modelos.ID' => $idmodelo
        );
        $data['modelo'] = $this->modelos_model->get_where($where);
        $data['idfoto'] = $idfoto;

        if ($idmodelo == null || $idfoto == null) {
            redirect('/modelos/listar/', 'refresh');
        } else {
            $this->load->view('layout/header', $data);
            $this->load->view('layout/menu');
            $this->load->view('modelos/thumb');
            $this->load->view('layout/footer');
        }
    }

    public function crear_thumb() {
        $session = $this->session->all_userdata();
        $this->r_session->check($session);

        var_dump($this->input->post());
        var_dump($_FILES);

        $where = array(
            'modelos.ID' => $this->input->post('idmodelo')
        );
        $modelo = $this->modelos_model->get_where($where);

        $nombre_archivo = $modelo['carpeta'] . $this->input->post('idfoto');

        $config['upload_path'] = './Fotodisk/' . $modelo['perfil'] . '/' . $modelo['carpeta'] . '/';
        $config['file_name'] = $nombre_archivo . 'Thumb.jpg';

        move_uploaded_file($_FILES['croppedImage']['tmp_name'], $config['upload_path'] . $config['file_name']);

        $config['image_library'] = 'gd2';
        $config['source_image'] = $config['upload_path'] . $config['file_name'];
        $config['create_thumb'] = FALSE;
        $config['maintain_ratio'] = TRUE;
        $config['width'] = 80;
        $config['height'] = 110;

        $this->load->library('image_lib', $config);
        $this->image_lib->resize();
    }

    public function crear_thumb_desde_imagen() {
        $session = $this->session->all_userdata();
        $this->r_session->check($session);

        var_dump($this->input->post());
        //var_dump($_FILES);

        $where = array(
            'modelos.ID' => $this->input->post('idmodelo')
        );
        $modelo = $this->modelos_model->get_where($where);

        $nombre_archivo = $modelo['carpeta'] . $this->input->post('idfoto');

        $c['upload_path'] = './Fotodisk/' . $modelo['perfil'] . '/' . $modelo['carpeta'] . '/';
        $c['file_name'] = $nombre_archivo . 'Thumb.jpg';


        $config['image_library'] = 'gd2';
        $config['source_image'] = $c['upload_path'] . str_replace("Thumb", "", $c['file_name']);
        $config['new_image'] = $c['upload_path'] . $c['file_name'];
        $config['create_thumb'] = FALSE;
        $config['maintain_ratio'] = FALSE;
        $config['width'] = 80;
        $config['height'] = 110;

        var_dump($config);

        $this->load->library('image_lib', $config);

        if (!$this->image_lib->resize()) {
            echo $this->image_lib->display_errors();
        } else {
            $this->marca_de_agua($config['source_image']);
        }
    }

    public function duplicar($idmodelo) {
        $session = $this->session->all_userdata();
        $this->r_session->check($session);

        $where = array(
            'modelos.ID' => $idmodelo
        );
        $modelo = $this->modelos_model->get_where($where);

        unset($modelo['ID']);
        $modelo['estado'] = 'habilitado';

        //$modelo['nombre'] = $modelo['nombre_formateado'];
        unset($modelo['nombre_formateado']);

        $modelo['idiomas'] = $modelo['idiomas_formateado'];
        unset($modelo['idiomas_formateado']);

        $modelo['viaja_donde'] = $modelo['viaja_donde_formateado'];
        unset($modelo['viaja_donde_formateado']);

        $modelo['observaciones'] = $modelo['observaciones_formateado'];
        unset($modelo['observaciones_formateado']);

        $modelo['carpeta'] = $this->generateRandomString(20);

        unset($modelo['barrio_nombre']);
        unset($modelo['ciudad_nombre']);
        unset($modelo['pais_nombre']);

        /*
         * Borro los campos a completar obligatorios
         */
        $modelo['nombre'] = "";
        $modelo['documento'] = "";
        
        $id = $this->modelos_model->set($modelo);

        redirect('/modelos/modificar/' . $id . '/', 'refresh');
    }
    public function exportar() {
        $session = $this->session->all_userdata();
        $this->r_session->check($session);
        
        
        $data['session'] = $this->session->all_userdata();
        $data['menu'] = 9;
        $data['javascript'] = array(
            '/assets/modulos/modelos/js/exportar.js'
        );
        
        
        $where = array(
            'perfil' => 'A-MujeresModelos',
            'estado' => 'habilitado'
        );
        $or_where = array(
            'estado' => 'deshabilitado'
        );
        
        $data['modelos'] = $this->modelos_model->gets_where_or_where($where, $or_where);
        
        $this->excel->setActiveSheetIndex(0);
        $this->excel->getActiveSheet()->setTitle('test worksheet');
        
        $this->excel->getActiveSheet()->setCellValue('A1', 'ORDEN');
        $this->excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
        $this->excel->getActiveSheet()->setCellValue('B1', 'NOMBRE');
        $this->excel->getActiveSheet()->getStyle('B1')->getFont()->setBold(true);
        
        $fila = 2;
        foreach($data['modelos'] as $modelo) {
            $this->excel->getActiveSheet()->setCellValue('A'.$fila, $modelo['orden']);
            $this->excel->getActiveSheet()->setCellValue('B'.$fila, $modelo['nombre']);
            $fila++;
        }
        
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="nombredelfichero.xls"');
        header('Cache-Control: max-age=0'); //no cache
        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
        // Forzamos a la descarga
        $objWriter->save('php://output');
        
    }

    private function formatear_fecha($fecha) {
        $aux = '';
        $aux .= substr($fecha, 6, 4);
        $aux .= '-';
        $aux .= substr($fecha, 3, 2);
        $aux .= '-';
        $aux .= substr($fecha, 0, 2);

        return $aux;
    }

    private function formatear_fecha_para_mostrar($fecha) {
        $aux = '';
        $aux .= substr($fecha, 8, 2);
        $aux .= '/';
        $aux .= substr($fecha, 5, 2);
        $aux .= '/';
        $aux .= substr($fecha, 0, 4);

        return $aux;
    }

    private function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    private function marca_de_agua($url) {
        $config['source_image'] = $url;
        $config['wm_type'] = 'overlay';
        $config['wm_vrt_alignment'] = 'bottom';
        $config['wm_hor_alignment'] = 'center';
        $config['wm_text'] = '/assets/web/images/logo.png';
        $this->image_lib->initialize($config);
        $this->image_lib->watermark();
    }

}

?>
