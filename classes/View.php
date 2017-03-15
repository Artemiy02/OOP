<?php

class View
	implements Iterator
{
		protected $data = [];

		public function __set($k, $v)
		{
				$this->data[$k] = $v;
		}

		public function __get($k)
		{
				return $this->data[$k];
		}

		public function display($template)
		{
				foreach ($this->data as $key => $value){
							$$key = $value;
				}
				include __DIR__ . '/../views/'. $template;
		}

		public function rewind()
		{
        $this->position = 0;
    }

    public function current()
		{
        return $this->array[$this->position];
    }

    public function key()
	 {
        return $this->position;
    }

    public function next()
		{
        ++$this->position;
    }

    public function valid()
		{
        return isset($this->array[$this->position]);
    }
}
