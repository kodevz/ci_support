<?php

use CISupport\Facades\Config;
use CISupport\Facades\Pagination;
use CISupport\Facades\DB;
use CISupport\Facades\Loader;
use CISupport\Facades\Request;
use CISupport\Facades\Session;

class Student extends CI_Controller
{


    protected $request;

    public function __construct(Request $request)
    {
        parent::__construct();


        $this->request = $request;
       
    }

    public function index(Request $request) {

       
       
        $config['per_page'] = 10;

        $page = $this->request->get('page', true);
        $search_data = $this->request->get('search_data', true);

        
        $db = DB::from('students');
    
        if ($search_data != '') {

            $db = $db->like('student_name', $search_data)
                    ->or_like('email_address', $search_data)
                    ->or_like('contact', $search_data)
                    ->or_like('gender', $search_data)
                    ->or_like('country', $search_data);
        }
    
      
        $studentList = $db->limit($config['per_page'], $page)
                                    ->order_by("student_id", "desc")
                                    ->get()->result_array();

        $total_row =  DB::clone()->count_all_results();

        $result['student_list'] = $studentList;

        $config['base_url'] = "http://localhost/ci_crud/student?search_data=$search_data";
        $config['total_rows'] = $total_row;
        $config['use_page_numbers'] = TRUE;
        $config['page_query_string'] = TRUE;
        $config['query_string_segment'] = 'page';


        //Optional (Pagination Design)
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['prev_link'] = '&lt;Previous';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = 'Next &gt;</i>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $result['pagination'] =  Pagination::initialize($config)->create_links();
        $data['content'] = Loader::view('student_list', $result, true);
        Loader::view('master', $data);
    }

    public function create_student_info() {
      

        if (isset(Request::post()['student_name'])) {

            $result = DB::insert('students', Request::post());
            if ($result) {
                Session::set_flashdata('message', 'Succefully Created Student Info.');
            } else {
                Session::set_flashdata('message', "An error occurred while inserting data.");
            }
            redirect('student');
        }
    }

    public function view_student_info($student_id) {
        if ($student_id != '') {
            DB::where('student_id', $student_id);
            $row['student_info'] =  DB::get('students')->row_array();
        }
        $data['content'] = Loader::view('view_student_info', $row, true);
        Loader::view('master', $data);
    }

    public function update_student_info($student_id) {

      
        if (isset($_POST['student_id'])) {

            $update_data = Request::post();
            $student_id = $update_data['student_id'];
            unset($update_data['student_id']);

            $result = DB::where('student_id', $student_id)
                ->update('students', $update_data);

            if ($result) {

                Session::set_flashdata('message', 'Succefully Updated Student Info.');
            } else {
                Session::set_flashdata('message', 'An error occurred while inserting data');
            }

            //  redirect('student');
        }
        if ($student_id != '') {
            $row['student_info'] =  DB::where('student_id', $student_id)->get('students')->row_array();
        }

        $data['content'] = Loader::view('update_student_info', $row, true);
        Loader::view('master', $data);
    }

    public function delete_student_info($student_id) {

        if ($student_id != '') {
            $result = DB::where('student_id', $student_id)
                        ->delete('students');
            if ($result) {
                Session::set_flashdata('message', 'Succefully Deleted Student Info.');
            } else {
                Session::set_flashdata('message', "An error occurred while inserting data.");
            }
            redirect('student');
        }
    }

}
