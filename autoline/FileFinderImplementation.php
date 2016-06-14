<?php
/**
 * Created by PhpStorm.
 * User: Виктор Сидоренко
 * Date: 14.06.2016
 * Time: 15:53
 */
require_once 'FileFinder.php';
class FileFinderImplementation implements FileFinder {
    # your code here
    public $onlyFiles = false;
    public $onlyDir = false;
    public $directories = array();
    public $regExp = array();
    public $fileList = array();

    public function isFile() {
        $this->onlyFiles = true;
        return $this;
    }

    public function isDir() {
        $this->onlyDir = true;
        return $this;
    }

    public function inDir($dir)
    {
        if((substr($dir, -1, 1)) !== '/') {
            $this->directories[] = $dir . '/';
        } else {
            $this->directories[] = $dir;
        }
        return $this;
    }

    public function match($regularExpression)
    {
        $this->regExp[] = $regularExpression;
        return $this;
    }

    private function scanDir($path)
    {

        if ($this->onlyFiles && $this->onlyDir) {
            if (empty($this->regExp)) {
                if (is_dir($path)) {
                    $files = scandir($path);
                    foreach ($files as $file) {
                        if (is_dir($path . $file) && $file !== '..' && $file !== '.') {
                            $this->fileList[] =  $path . $file;
                            $this->scanDir($path . $file . '/');
                        } elseif (is_file($path . $file)) {
                            $this->fileList[] = $path . $file;
                        }
                    }
                }
            } else {
                foreach ($this->regExp as $regularExpression) {
                    if (is_dir($path)) {
                        $files = scandir($path);
                        foreach ($files as $file) {
                            if (is_dir($path . $file) && $file !== '..' && $file !== '.') {
                                if (preg_match($regularExpression, $file, $matches) > 0) {
                                    $this->fileList[] = $path . $matches[0];
                                }
                                $this->scanDir($path . $file . '/');
                            } elseif (is_file($path . $file) && preg_match($regularExpression, $file, $matches) > 0) {
                                $this->fileList[] = $path . $file;
                            }
                        }
                    }
                }
            }
        }

        if ($this->onlyFiles) {
            if (empty($this->regExp)) {
                if (is_dir($path)) {
                    $files = scandir($path);
                    foreach ($files as $file) {
                        if (is_dir($path . $file) && $file !== '..' && $file !== '.') {
                            $this->scanDir($path . $file . '/');
                        } elseif (is_file($path . $file)) {
                            $this->fileList[] = $path . $file;
                        }
                    }
                }
            } else {
                foreach ($this->regExp as $regularExpression) {
                    if (is_dir($path)) {
                        $files = scandir($path);
                        foreach ($files as $file) {
                            if (is_dir($path . $file) && $file !== '..' && $file !== '.') {
                                $this->scanDir($path . $file . '/');
                            } elseif (is_file($path . $file) && preg_match($regularExpression, $file, $matches) > 0) {
                                $this->fileList[] = $path . $file;
                            }
                        }
                    }
                }
            }
        }

        if ($this->onlyDir) {
            if (empty($this->regExp)) {
                if (is_dir($path)) {
                    $files = scandir($path);
                    foreach ($files as $file) {
                        if (is_dir($path . $file) && $file !== '..' && $file !== '.') {
                            $this->fileList[] = $path . $file;
                            $this->scanDir($path . $file . '/');
                        }
                    }
                } else {
                    foreach ($this->regExp as $regularExpression) {
                        if (is_dir($path)) {
                            $files = scandir($path);
                            foreach ($files as $file) {
                                if (is_dir($path . $file) && $file !== '..' && $file !== '.') {
                                    if (preg_match($regularExpression, $file, $matches) > 0) {
                                        $this->fileList[] = $path . $matches[0];
                                    }
                                    $this->scanDir($path . $file . '/');
                                }
                            }
                        }
                    }
                }
            }
        }
    }

    public function getList()
    {
        if(empty($this->directories)){
            throw new Exception('Directory is not provide');
        }

        foreach($this->directories as $dir) {
            $path = __DIR__ . $dir;

            $this->scanDir($path);
        }
        return array_unique($this->fileList);
    }
}

# search for all .conf or .ini files in directories /etc/ and /var/log/
$fileList = new FileFinderImplementation();

$fileList
    ->isFile()
    ->inDir('/etc/')
    ->inDir('/var/log/')
    ->match('/.*\.conf$/')
    ->match('/.*\.ini$/');

$files = $fileList->getList();
foreach ($files as $file) {
    print $file . "<br/>";
}


#  search for all files in /tmp
$fileList = (new FileFinderImplementation())
    ->isFile()
    ->inDir('/var');
$files = $fileList->getList();
foreach ($files as $file) {
    print $file . "<br/>";
}

# should throw an exception if no dirs were provided
$files = (new FileFinderImplementation())
    ->isFile()
    ->match('/.*\.ini$/')
    ->getList(); # -> exception
