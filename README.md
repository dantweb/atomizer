# Atomizer

A flexible data transformation and mapping library for PHP 8.2+. Atomizer provides a robust framework for converting arbitrary data structures into normalized models through configurable mapping.

## Features

- Flexible data transformation between different formats
- Configurable mapping system to define data relationships
- Support for complex data structures through Matrix and Atom models
- Adapter pattern for easy integration with different data sources
- PSR-3 compatible logging

## Installation

```bash
composer require dantweb/atomizer
```

## Requirements

- PHP 8.2 or higher
- PSR-3 Logger implementation

## Basic Usage

```php
// Create a map factory
$mapFactory = new MapFactory();

// Load a map configuration
$map = $mapFactory->createFromArray([
    // Your map configuration
]);

// Create an adapter
$adapter = new YourAdapter($map, $logger);

// Transform your data
$result = $adapter->convertToEcwModels($yourData);
```

## Architecture

Atomizer is built around several key components:

### Maps

Maps define how source data is transformed into target models. The library includes:

- `AbstractMap` - Base implementation of mapping functionality
- `BaseMap` - Standard map implementation
- `MapFactory` - Creates map instances from configuration

### Models

Two main model types exist in the library:

- **Atomizer Models**: Internal representations (`Atom`, `Matrix`)
- **ECW Models**: Output models implementing `EcwModelInterface`

### Adapters

Adapters connect data sources to the mapping system:

- `AbstractAdapter` - Base adapter implementation
- `AdapterInterface` - Interface for all adapters

## Testing

```bash
composer test
```

## License

CC-BY-NC-4.0