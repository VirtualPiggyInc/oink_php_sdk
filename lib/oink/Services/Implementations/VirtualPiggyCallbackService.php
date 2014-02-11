<?php

/**
 * @package VirtualPiggy.Services.Implementations
 */
class VirtualPiggyCallbackService implements ICallbackService {

    public function GetCallbackAddressInformation()
    {
        $address = new dtoAddressRequest();
        
        if (isset($_POST['MerchantIdentifier']))        
        {
            $address->MerchantIdentifier = $_POST['MerchantIdentifier'];
        }
        if (isset($_POST['Token']))        
        {
            $address->Token = $_POST['Token'];
        }
        if (isset($_POST['Email']))        
        {
            $address->Email = $_POST['Email'];
        }
        if (isset($_POST['FirstName']))        
        {
            $address->FirstName = $_POST['FirstName'];
        }
        if (isset($_POST['LastName']))        
        {
            $address->LastName = $_POST['LastName'];
        }
        if (isset($_POST['Address']))        
        {
            $address->Address = $_POST['Address'];
        }
        if (isset($_POST['Zip']))        
        {
            $address->Zip = $_POST['Zip'];
        }
        if (isset($_POST['State']))        
        {
            $address->State = $_POST['State'];
        }

        return $address;
         
    }
    
    public function GetCallbackTransactionStatus() {
        $status = new dtoTransactionStatus();
        if (isset($_POST['id']))
            $status->id = $_POST['id'];
        if (isset($_POST['Status']))
            $status->Status = $_POST['Status'];
        if (isset($_POST['Url']))
            $status->Url = $_POST['Url'];
        if (isset($_POST['errorMessage']))
            $status->errorMessage = $_POST['errorMessage'];
        if (isset($_POST['MerchantIdentifier']))
            $status->MerchantIdentifier = $_POST['MerchantIdentifier'];
        if (isset($_POST['TransactionIdentifier']))
            $status->TransactionIdentifier = $_POST['TransactionIdentifier'];
        if (isset($_POST['Description']))
            $status->Description = $_POST['Description'];
        if (isset($_POST['Amount']))
            $status->Amount = $_POST['Amount'];
        if (isset($_POST['ExpiryDate']))
            $status->ExpiryDate = $_POST['ExpiryDate'];
        if (isset($_POST['Data']))
            $status->Data = $_POST['Data'];
        if (isset($_POST['Address']))
            $status->Address = $_POST['Address'];
        if (isset($_POST['City']))
            $status->City = $_POST['City'];
        if (isset($_POST['Zip']))
            $status->Zip = $_POST['Zip'];
        if (isset($_POST['Email']))
            $status->Email = $_POST['Email'];
        if (isset($_POST['State']))
            $status->State = $_POST['State'];
        if (isset($_POST['Country']))
            $status->Country = $_POST['Country'];
        return $status;
    }

}

?>
