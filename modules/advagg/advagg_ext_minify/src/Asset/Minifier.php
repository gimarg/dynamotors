<?php

namespace Drupal\advagg_ext_minify\Asset;

use Drupal\advagg\Asset\SingleAssetOptimizerBase;
use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\File\FileSystemInterface;
use Psr\Log\LoggerInterface;

/**
 * Optimizes a asset via external minifiers.
 */
class Minifier extends SingleAssetOptimizerBase {

  /**
   * Temporary file path to read data from in the command line.
   *
   * @var string
   */
  protected $in;

  /**
   * Temporary file path to write data to in the command line.
   *
   * @var string
   */
  protected $out;

  /**
   * Construct the optimizer instance.
   *
   * @param \Psr\Log\LoggerInterface $logger
   *   The logger service.
   * @param \Drupal\Core\Config\ConfigFactoryInterface $config_factory
   *   A config factory for retrieving required config objects.
   * @param \Drupal\Core\File\FileSystemInterface $file
   *   The filesystem service.
   */
  public function __construct(LoggerInterface $logger, ConfigFactoryInterface $config_factory, FileSystemInterface $file) {
    parent::__construct($logger);
    $this->config = $config_factory->get('advagg_ext_minify.settings');
    $this->in = $file->realpath($file->tempnam('public://js/optimized', 'advagg_in'));
    $this->out = $file->realpath($file->tempnam('public://js/optimized', 'advagg_out'));
  }

  /**
   * Minify Javascript using via command line.
   *
   * @param string $contents
   *   The JavaScript to minify.
   *
   * @return string|bool
   *   The process JavaScript or FALSE on failure.
   */
  public function js($contents) {
    file_put_contents($this->in, $contents);
    $output = $this->execute('js');
    $contents = file_get_contents($output);

    return $contents;
  }

  /**
   * Minify CSS using via command line.
   *
   * @param string $contents
   *   The CSS to minify.
   *
   * @return string
   *   The processed CSS or FALSE on failure.
   */
  public function css($contents) {
    file_put_contents($this->in, $contents);
    $output = $this->execute('css');
    $contents = file_get_contents($output);

    return $contents;
  }

  /**
   * Run the command line.
   *
   * @param string $ext
   *   The string css or js.
   *
   * @return string
   *   The file containing the minified data.
   */
  protected function execute($ext) {
    $run = $this->config->get($ext . '_cmd');

    $run = str_replace([
      '{%CWD%}',
      '{%IN%}',
      '{%IN_URL_ENC%}',
      '{%OUT%}',
    ], [
      \Drupal::root(),
      $this->in,
      urlencode(file_create_url($this->in)),
      escapeshellarg(realpath($this->out)),
    ], $run);

    // Run command and return the output file.
    shell_exec($run);
    return $this->out;
  }

  /**
   * {@inheritdoc}
   */
  public function optimize($contents, array $asset, array $data) {
    return $contents;
  }

}
