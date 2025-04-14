<?php

trait Cacheable {
    private $cache = [];
    public function getCache($key){
        return $this->cache[$key];
    }

    public function setCache($key,$data){
        $this->cache[$key] = $data;
    }
}

class DataProvider{
    use Cacheable;
}

class ProductRepository{
    use Cacheable;
}

$dataProvider = new DataProvider();
$dataProvider->setCache('User','sasha');
print($dataProvider->getCache('User') . '<br>');

$productRepository = new ProductRepository();
$productRepository->setCache('smartphone', 'Xiaomi 9c NFC');
print($productRepository->getCache('smartphone') . '<br>');

