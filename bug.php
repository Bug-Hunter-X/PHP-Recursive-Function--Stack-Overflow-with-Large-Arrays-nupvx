```php
function processData(array $data): array {
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $data[$key] = processData($value); // Recursive call
    } else if (is_string($value) && strlen($value) > 10) {
      $data[$key] = substr($value, 0, 10); // Truncate strings longer than 10 characters
    }
  }
  return $data;
}

$data = ['name' => 'John Doe', 'address' => ['street' => '123 Main Street', 'city' => 'Anytown'], 'description' => 'This is a very long description that needs to be truncated'];

$processedData = processData($data);
print_r($processedData);
```