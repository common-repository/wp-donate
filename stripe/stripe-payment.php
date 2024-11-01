<?php
namespace stripecustom\Service;
require_once ('vendor/autoload.php');

use \Stripe\Stripe;
use \Stripe\Customer;
use \Stripe\ApiOperations\Create;
use \Stripe\Charge;

class StripePayment
{

    private $apiKey;

    private $stripeService;

    public function __construct()
    {
        $this->apiKey = STRIPE_SECRET_KEY;
        $this->stripeService = new \Stripe\Stripe();
        $this->stripeService->setVerifySslCerts(false);
        $this->stripeService->setApiKey($this->apiKey);
    }

    public function addCustomer($customerDetailsAry)
    {     
        try{  
            $customer = new Customer();   
            $customerDetails = $customer->create($customerDetailsAry);        
            return $customerDetails;
        } catch(\Stripe\Exception\CardException $e) {
            return $e->getError()->message;
        }   catch (\Stripe\Exception\RateLimitException $e) {
            return $e->getError()->message; 
          } catch (\Stripe\Exception\InvalidRequestException $e) {
            return $e->getError()->message; 
          } catch (\Stripe\Exception\AuthenticationException $e) {
            return $e->getError()->message; 
          } catch (\Stripe\Exception\ApiConnectionException $e) {
            return $e->getError()->message; 
          } catch (\Stripe\Exception\ApiErrorException $e) {
            return $e->getError()->message; 
          } catch (Exception $e) {
            return $e->getError()->message; 
          }
    }

    public function chargeAmountFromCard($cardDetails)
    {
        $api_error = '';
        $customerDetailsAry = array(
            'email' => $cardDetails['email'],
            'source' => $cardDetails['token']
        );
        try{  
            $customerResult = $this->addCustomer($customerDetailsAry);
			if(is_object($customerResult)){
				try { 
					$charge = new Charge();
					$cardDetailsAry = array(
						'customer' => $customerResult->id,
						'amount' => $cardDetails['amount']*100 ,
						'currency' => 'USD',
						'description' => 'Donation by '.$cardDetails['email'],
					);
					$result = $charge->create($cardDetailsAry);
					return $result->jsonSerialize();
				} catch(\Stripe\Exception\CardException $e) { 
					return $e->getError()->message; 
				}   catch (\Stripe\Exception\RateLimitException $e) {
					return $e->getError()->message; 
				} catch (\Stripe\Exception\InvalidRequestException $e) {
					return $e->getError()->message; 
				} catch (\Stripe\Exception\AuthenticationException $e) {
					return $e->getError()->message; 
				} catch (\Stripe\Exception\ApiConnectionException $e) {
					return $e->getError()->message; 
				} catch (\Stripe\Exception\ApiErrorException $e) {
					return $e->getError()->message; 
				} catch (Exception $e) {
					return $e->getError()->message; 
				}   
			} else {
				return $customerResult;
			}   
         
        } catch(\Stripe\Exception\CardException $e) { 
            return $e->getError()->message; 
        }   catch (\Stripe\Exception\RateLimitException $e) {
            return $e->getError()->message; 
          } catch (\Stripe\Exception\InvalidRequestException $e) {
            return $e->getError()->message; 
          } catch (\Stripe\Exception\AuthenticationException $e) {
            return $e->getError()->message; 
          } catch (\Stripe\Exception\ApiConnectionException $e) {
            return $e->getError()->message; 
          } catch (\Stripe\Exception\ApiErrorException $e) {
            return $e->getError()->message; 
          } catch (Exception $e) {
            return $e->getError()->message; 
          }
        return false;
    }
}