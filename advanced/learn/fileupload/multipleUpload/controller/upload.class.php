<?php

if (!defined('APPROOT')) exit;

class Upload {
    private $file = array();    // 上传的多个文件信息
    private $return;    // 上传结果
    
    // 获取上传文件信息并加以处理
    private function fixFilesArray () {
        if ($_POST['type'] == 'single') {
            $this->file = $_FILES;
        } else {
			foreach ($_FILES as $name => $info) {
				foreach ($info as $attr => $values) {
					foreach ($values as $index => $value) {
						$this->file[$name.$index][$attr] = $value;
					}
				}
			}
		}
    }

    // 检查上传错误
    private function checkUploadError () {
        if(empty($this->file)) {
			$this->return->result = 0;
            $this->return->message = '无法获取到上传文件信息';
		} else {
			foreach ($this->file as $name => $info) {
				if($info['error']) { //非零
					switch ($info['error']) {
						case UPLOAD_ERR_INI_SIZE:
						case UPLOAD_ERR_FORM_SIZE:
							$this->return->$name->result = 0;
							$this->return->$name->message = '文件大小超限';
							break;
						case UPLOAD_ERR_PARTIAL:
							$this->return->$name->result = 0;
							$this->return->$name->message = '文件上传不完整';
							break;
						case UPLOAD_ERR_NO_FILE:
							$this->return->$name->result = 0;
							$this->return->$name->message = '上传文件为空';
							break;
					}
				} else {
					$this->return->$name->result = (int)move_uploaded_file($info['tmp_name'], APPROOT.'/uploads/'.$info['name']);
					$this->return->$name->message = $this->return->$name->result ? '上传成功' : '上传失败';
				}
			}
		}
    }

    // 显示上传模板
    public function showUploadForm ($templateName) {
        echo file_get_contents(APPROOT.'/view/'.$templateName.'.html');
    }

    // 处理上传的文件
    public function handleUploadFile () {
        // 获取文件信息并处理
        $this->fixFilesArray();
        echo '<pre>';
		print_r($this->file);
		echo '</pre>';
        // 检查上传错误
        $this->checkUploadError(); 
        // 显示上传结果
        echo '<pre>';
		print_r($this->return);
		echo '</pre>';
    }
}