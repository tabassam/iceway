<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

	public function upload($file,$destinationPath){

		if (!file_exists($destinationPath) || !is_dir($destinationPath)) {
			mkdir($destinationPath, 0777, TRUE);
		}

		$image_filename = $file->getClientOriginalName();
		$image_filename = time() . "_" . $image_filename;
		$image_filename = str_replace(" ", "_", $image_filename);
		$file->move($destinationPath, $image_filename);
		return $image_filename;
	}

	public function deletePhysicalFile($path,$filename){

		if (!File::delete($path.$filename)) {
			throw new \RuntimeException("Unable to delete file!");
		}
	}

}
