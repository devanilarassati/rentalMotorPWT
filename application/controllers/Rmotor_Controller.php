<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rmotor_Controller extends CI_Controller
{

    public function index()
    {
        $data = array(
            'active_home'   => 'active',
            'data_menu'     => $this->Model_App->getAllMotor(),
            'title'         => 'Rental Motor PWT',
        );
        // $namaAplikasi = array(
        //     '$title1' => $this->Model_App->namaAplikasi(),
        // );

        $this->load->view('elements/vHeader', $data);
        $this->load->view('pages/home');
        // $this->load->view('elements/vFooterCustomer');
        
    }

    function tambahMenuToCart($id_motor)
    {
        if ($this->session->userdata('LEVEL') == '') {
            $this->session->set_flashdata('notif', 'Anda Harus Masuk terlebih dahulu sebelum memesan.<br> Apabila belum punya akun silahkan klik tombol Daftar dibawah.');
            redirect('Login_Controller');
        } else {

            $product = $this->Model_App->find($id_motor);
            $data = array(
                'id'      => $product->id_motor,
                'hari'     => 1,
                'price'   => $product->harga_rental,
                'name'    => $product->nm_motor
            );

            $this->cart->insert($data);
            redirect('Rmotor_Controller/rpesanan');
        }
    }

    function tambahToCart()
    {
        if ($this->session->userdata('LEVEL') == '') {
            $this->session->set_flashdata('notif', 'Anda Harus Masuk terlebih dahulu sebelum memesan.<br> Apabila belum punya akun silahkan klik tombol Daftar dibawah.');
            redirect('Login_Controller');
        } else {
            $idMotor = $this->input->post('id_motor');

        // Cek apakah id_motor sudah ada dalam keranjang (cart)
        $isMotorInCart = $this->checkMotorInCart($idMotor); 
                if ($isMotorInCart) {
                    $this->session->set_flashdata('notif', 'Anda hanya bisa memesan satu motor dengan ID yang sama.');
                    echo '<script>alert("mohon maaf, anda hanya bisa menyewa 1 motor saja.");</script>';
                    echo '<script>window.location.href = "'.site_url('Rmotor_Controller/rpesanan').'";</script>';
                    // redirect('Rmotor_Controller/rpesanan');
                } else {
                    $data = array(
                        'id'      => $idMotor,
                        'hari'    => $this->input->post('hari'),
                        'price'   => $this->input->post('harga_rental'),
                        'name'    => $this->input->post('nm_motor')
                    );
                    $this->cart->insert($data);

                    // $this->session->set_flashdata('notif', 'Penyewaan Motor Berhasil, Silakan lanjutkan transaksi.');
                    echo '<script>alert("Penyewaan Motor Berhasil, Silakan lanjutkan transaksi.");</script>';
                    echo '<script>window.location.href = "'.site_url('Rmotor_Controller/rpesanan').'";</script>';
                }
            // $data = array(
            //     'id'      => $this->input->post('id_motor'),
            //     'hari'     => $this->input->post('hari'),
            //     'price'   => $this->input->post('harga_rental'),
            //     'name'    => $this->input->post('nm_motor')
            // );
            // $this->cart->insert($data);
            // echo '<script>alert("Penyewaan Motor Berhasil, Silakan lanjutkan transaksi.");</script>';
            // echo '<script>window.location.href = "'.site_url('Rmotor_Controller/rpesanan').'";</script>';
           
           
         
            // $pesanNotifikasi = 'Pesanan Anda kosong. Silahkan pesan Motor terlebih dahulu.';
            // $this->session->set_flashdata('rpesanan', $pesanNotifikasi);
            // echo '<script>alert("'.$pesanNotifikasi.'"); history.back(self);</script>';

            // redirect('Rmotor_Controller/rpesanan');
        }

        
    }

    private function checkMotorInCart($idMotor)
{
    // Di sini, Anda perlu melakukan pengecekan apakah id_motor sudah ada dalam keranjang (cart).
    // Misalnya, Anda dapat mengiterasi isi keranjang dan memeriksa apakah id_motor sudah ada di dalamnya.
    // Contoh simulasi: Jika id_motor ada dalam keranjang, maka dianggap sudah ada.
    
    $numOfMotors = count($this->cart->contents());
    return $numOfMotors >= 1;
}


    public function rpesanan()
    {
        if ($this->cart->total_items() == '0') {
            // $this->session->set_flashdata('rpesanan', 'rpesanan anda kosong.<br> Silahkan pesan terlebih dahulu.');
            $pesanNotifikasi = 'Pesanan Anda kosong. Silahkan rental motor terlebih dahulu.';
            $this->session->set_flashdata('rpesanan', $pesanNotifikasi);
            echo '<script>alert("'.$pesanNotifikasi.'"); history.back(self);</script>';
        } else {

            $data = array(
                'title' => 'Rmotor Online',
                'active_rpesanan' => 'active',
                'id_pemesanan' => $this->Model_App->getIDPemesanan()
            );
            
            $this->load->view('elements/vHeaderCustomer', $data);
            $this->load->view('pages/customer/rpesanan');
        }
    }

    public function detailRental()
    {

        // $data = array(
        //     'data_rental' => $this->Model_App->getIdMotor($id),
        // );

        // $data['tbl_motor'] = $this->Model_App->getIdMotor($id);
        // $this->load->view('pages/customer/detailRental', $data);

        $data = array(
            'id_rental' => $this->input->post('id_rental'),
            'id_user' => $this->session->userdata('ID'),
            'tgl_rental' => date("Y-m-d", strtotime($this->input->post('tgl_rental'))),
            'tgl_kembali' => date("Y-m-d", strtotime($this->input->post('tgl_kembali')))
        );
        $this->Model_App->insertData("tbl_detailrental", $data);

        // redirect('Rmotor_Controller/dataPesanan');

        $this->load->view('elements/vHeaderCustomer');
        $this->load->view('pages/customer/detailRental');
        $this->load->view('elements/vFooterCustomer');
        
        //blom selesai
    }


    public function bersihkanrpesanan()
    {
        $this->cart->destroy();
        redirect('Rmotor_Controller');
    }

    public function confirmPesanan()
    {
        $data = array(
            'id_pemesanan' => $this->input->post('id_pemesanan'),
            'id_customer' => $this->session->userdata('ID'),
            'pembayaran' => $this->input->post('pembayaran'),
            'status_pemesanan' => $this->input->post('status_pemesanan'),
            'tgl_pemesanan' => date("Y-m-d", strtotime($this->input->post('tgl_pemesanan')))
        );
        $this->Model_App->insertData("tbl_pemesanan", $data);

        foreach ($this->cart->contents() as $items) {
            $id_motor = $items['id'];
            $hari = $items['hari'];

            $data_detail = array(
                'id_pemesanan' => $this->input->post('id_pemesanan'),
                'id_motor' => $id_motor,
                'hari' => $hari,

            );
            $this->Model_App->insertData("tbl_pemesanan_detail", $data_detail);
        }
        $this->session->unset_userdata('limit_add_cart');
        $this->cart->destroy();
        redirect('Rmotor_Controller/dataPesanan');
    }

    public function dataPesanan()
    {
        $id_customer = $this->session->userdata('ID');
        $data = array(
            'title' => 'Rmotor Online',
            'active_pesanan' => 'active',
            'data_pemesanan' => $this->Model_App->getDataPemesanan($id_customer),
            // 'data_pemesanan' => $this->Model_App->getDetailRental($id_user),
        );

        $this->load->view('elements/vHeaderCustomer', $data);
        $this->load->view('pages/customer/dataPesanan');
    }

    
    public function detailPesanan()
    {
        $id = $this->uri->segment(3);
        $data = array(
            'data_pemesanan' => $this->Model_App->getPemesanan($id),
            'data_pemesanan_detail' => $this->Model_App->getPemesananDetail($id),
        );
        $this->load->view('elements/vHeaderCustomer', $data);
        $this->load->view('pages/customer/detailPesanan');
    }

    function detailPemesanan()
    {
        $id = $this->uri->segment(3);
        $data = array(
            'title' => 'Pemesanan',
            'headerTitle' => 'Detail Laporan Pemesanan',
            'formTitle1' => 'Data Pemesanan',
            'formTitle2' => 'Detail Pesanan',
            'data_pemesanan' => $this->Model_App->getDetailDataPemesanan($id),
            'data_barang' => $this->Model_App->getDetailDataBarang($id),
        );
        $this->load->view('elements/vHeaderCustomer', $data);
        $this->load->view('pages/admin/pemesanan/kelolaDetailPemesanan');
    }
    //syarat
    function syarat()
    {
        $id = $this->uri->segment(3);
        $data = array(
            'title' => 'RMotor Online',
            'active_syarat' => 'active'
        );

        $this->load->view('elements/vHeaderCustomer', $data);
        $this->load->view('pages/syarat');
        $this->load->view('elements/vFooterCustomer');
    }

    public function contact()
    {
    $data['meta'] = [
        'title' => 'Contact Us',
    ];
    $this->load->library('form_validation');

    $this->load->view('elements/vHeaderCustomer');
    $this->load->view('pages/contact');

    if ($this->input->method() === 'post') {
        $this->load->model('Feedback_model');

        $rules = $this->Feedback_model->rules();
        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == FALSE) {
            $data['error_message'] = 'Form validation failed. Please check your inputs.';
    $this->load->view('pages/contact', $data);
        }

        $feedback = [
        // 'id_contact' => uniqid('', true),
        'nama' => $this->input->post('nama'),
        'email' => $this->input->post('email'),
        'pesan' => $this->input->post('pesan')
        ];

        // $feedback_saved = $this->Feedback_model->insert($tbl_contact);
        $this->Model_App->insertData('tbl_contact', $feedback);

        redirect("Rmotor_Controller");

    }
}

    //kontak
    function kontak()
    {
        $id = $this->uri->segment(3);
        $data = array(
            'title' => 'RMotor Online',
            'active_kontak' => 'active',
            'data_pemesanan' => $this->Model_App->getPemesanan($id),
            'data_menu' => $this->Model_App->getAllMotor()
        );

        $this->load->view('elements/vHeaderCustomer', $data);
        $this->load->view('pages/kontak');
    }

    //profil
    public function profil1()
    {
        $id_customer = $this->session->userdata('ID');
        $data = array(
            'title' => 'Rmotor Online',
            'active_pesanan' => 'active',
            'data_pemesanan' => $this->Model_App->getDataPemesanan($id_customer)
        );

        $this->load->view('elements/vHeaderCustomer', $data);
        $this->load->view('pages/customer/dataPesanan');
    }

    function profil()
    {
        $id_customer = $this->session->userdata('ID');
        $data = array(
            'title' => 'Rmotor Online',
            'active_profil' => 'active',
            'data_customer' => $this->Model_App->getDataCustomer($id_customer)
        );
        $this->load->view('elements/vHeaderCustomer', $data);
        $this->load->view('pages/customer/profil/profil');
    }
    function editprofil()
    {
        $id = $this->uri->segment(3);
        $data = array(
            'title' => 'Edit Customer',
            'formTitle' => 'Edit Data ',
            'headerTitle' => 'Data Customer',


            'data_customer' => $this->Model_App->getIdCustomer($id),
        );
        $this->load->view('elements/vHeaderCustomer', $data);
        $this->load->view('pages/Customer/profil/editprofil');
    }

    function prosesEditCustomer()
    {
        $id['id_user'] = $this->input->post('id_user');
        $data = array(
            'nm_user' => $this->input->post('nm_user'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'jk' => $this->input->post('jk'),
            'no_identitas' => $this->input->post('no_identitas'),
            'email_user' => $this->input->post('email_user'),
            'notelp_user' => $this->input->post('notelp_user'),
            'lvl_user' => $this->input->post('lvl_user'),
        );
        $this->Model_App->updateData('tbl_user', $data, $id);
        redirect("Rmotor_Controller/");
    }
    function laporan()
    {
        $id = $this->uri->segment(3);
        $data = array(
            'title' => 'Pemesanan',

            'data_pemesanan' => $this->Model_App->getDetailDataPemesanan($id),
            'data_barang' => $this->Model_App->getDetailDataBarang($id),
            'data_contact' => $this->Model_App->getAllData('tbl_contact'),
        );
        $this->load->view('pages/customer/laporan', $data);
    }

}