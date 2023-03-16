<?php

namespace App\Services;

use App\Entities\Plan;
use Exception;
use Gerencianet\Exception\GerencianetException;
use Gerencianet\Gerencianet;


class GerencianetService
{
  public const PAYMENT_METHOD_BILLET = 'billet';
  public const PARMENT_METHOD_CREDIT = 'credit';

  private const STATUS_NEW = 'new';
  private const STATUS_WAITING = 'waiting';
  private const STATUS_PAID = 'paid';
  private const STATUS_UNPAID = 'unpaid';
  private const STATUS_REFUNDED = 'refunded';
  private const STATUS_CONTESTED = 'contested';
  private const STATUS_SETTLED = 'settled';
  private const STATUS_CANCELED = 'canceled';

  private $options;
  private $user;
  private $subscriptService;
  private $userSubscriptService;

  public function __construct()
  {
    $this->options = [
      'client_id' => env('GERENCIANET_CLIENT_ID'),
      'client_secret' => env('GERENCIANET_CLIENT_SECRET'),
      'sandbox' => env('GERENCIANET_SANDBOX'), // altere conforme o ambiente (true = Homologação e false = producao)
      'time' => env('GERENCIANET_TIMEOUT')
    ];
  }

  public function createPlan(Plan $plan)
  {
    $plan->setIntervalRepeats();

    $body = [
      'name' => $plan->name,
      'interval' => $plan->interval,
      'repeats' => $plan->repeats
    ];

    try {
      $api = new Gerencianet($this->options);

      $response = $api->createPlan([], $body);

      $plan->plan_id = (int)$response['data']['plan_id'];

      //echo '<pre>' . json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</pre>';
      //exit;
    } catch (GerencianetException $e) {

      log_message('error', '[ERROR] {exception}', ['exception' => $e]);

      die('Erro ao salvar plano na gerencianet');
    } catch (\Exception $e) {
      log_message('error', '[ERROR] {exception}', ['exception' => $e]);

      die('Erro ao salvar plano na gerencianet');
    }
  }

  public function updatePlan(Plan $plan)
  {
    $params = ['id' => $plan->plan_id];

    $body = ['name' => $plan->name];

    try {

      $api = new Gerencianet($this->options);
      $response = $api->updatePlan($params, $body);

      //echo '<pre>' . json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</pre>';
    } catch (GerencianetException $e) {

      log_message('error', '[ERROR] {exception}', ['exception' => $e]);
      die('Erro ao atualizar plano na gerencianet');
    } catch (\Exception $e) {

      log_message('error', '[ERROR] {exception}', ['exception' => $e]);
      die('Erro ao atualizar plano na gerencianet');
    }
  }

  public function deletePlan(int $planId)
  {
    $params = ['id' => $planId];

    try {
      $api = new Gerencianet($this->options);
      $response = $api->deletePlan($params, []);

      //echo '<pre>' . json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</pre>';
    } catch (GerencianetException $e) {

      log_message('error', '[ERROR] {exception}', ['exception' => $e]);
      die('Erro ao excluir plano na gerencianet');

    } catch (\Exception $e) {

      log_message('error', '[ERROR] {exception}', ['exception' => $e]);
      die('Erro ao excluir plano na gerencianet');

    }
  }
}
