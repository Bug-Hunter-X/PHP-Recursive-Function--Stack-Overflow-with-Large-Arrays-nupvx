```php
function processData(array $data): array {
  $queue = [$data];
  while (!empty($queue)) {
    $current = array_shift($queue);
    foreach ($current as $key => $value) {
      if (is_array($value)) {
        array_unshift($queue, $value); // Add array to the beginning of the queue
      } else if (is_string($value) && strlen($value) > 10) {
        $current[$key] = substr($value, 0, 10);
      }
    }
    $data = $current; // Update $data
  }
  return $data;
}

$data = ['name' => 'John Doe', 'address' => ['street' => '123 Main Street', 'city' => 'Anytown'], 'description' => 'This is a very long description that needs to be truncated'];

$processedData = processData($data);
print_r($processedData);
```