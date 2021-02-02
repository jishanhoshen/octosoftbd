<?php
class Template
{
    private $vars = array();

    public function assign($key, $value)
    {
        $this->vars[$key] = $value;
    }

    function image($image)
    {
        $path = './assets/img/' . $image;
        if (file_exists($path)) {
            return $path;
        }
    }

    public function css(...$assets)
    {
        $link = '';
        foreach ($assets as $value) {
            $csspath = './assets/css/' . $value . '.css';
            if (file_exists($csspath)) {
                $link .= '<link rel="stylesheet" href="' . $csspath . '">';
            }
        }
        return $link;
    }
    public function js(...$assets)
    {
        $script = '';
        foreach ($assets as $value) {
            $jspath = './assets/js/' . $value . '.js';
            if (file_exists($jspath)) {
                $script .= '<script src="' . $jspath . '"></script>';
            }
        }
        return $script;
    }

    public function render($template_name)
    {
        $path = './public/' . $template_name . '.html';

        if (file_exists($path)) {
            $contents = file_get_contents($path);

            foreach ($this->vars as $key => $value) {
                $contents = preg_replace('/\[' . $key . '\]/', $value, $contents);
            }

            eval(' ?>' . $contents . '<?php');
        } else {
            exit('<h1>Tmplate Error</h1>');
        }
    }
}
