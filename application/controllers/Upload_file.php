<?php
class upload_file extends CI_Controller {

    //index function
    function index()
    {
        //load file upload form
        $this->load->view('upload_view');
    }

    //file upload function
    function upload()
    {
        //set preferences
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'png|jpg|gif';
        $config['max_size'] = '150';
        $config['max_width'] = '1024'; /* max width of the image file */
        $config['max_height'] = '768'; /* max height of the image file */

        //load upload class library
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('filename'))
        {
            // case - failure
            $upload_error = array('error' => $this->upload->display_errors());
            $this->load->view('upload_view', $upload_error);
        }
        else
        {
            // case - success
            $upload_data = $this->upload->data();
            $data['success_msg'] = '<a class="chip">Your file <strong>' . $upload_data['file_name'] . '</strong> was successfully uploaded!</a>';
            $this->load->view('upload_view', $data);
        }
    }
}
?>