<?php

namespace PHPMailer\PHPMailer;

class PHPMailer
{
    public $isSMTP = false;
    public $Host = '';
    public $SMTPAuth = false;
    public $Username = '';
    public $Password = '';
    public $SMTPSecure = '';
    public $Port = 587;
    public $From = '';
    public $FromName = '';
    public $Recipients = [];
    public $Subject = '';
    public $Body = '';
    public $isHTML = false;

    // Méthode pour activer SMTP
    public function isSMTP()
    {
        $this->isSMTP = true;
    }

    // Configuration de l'expéditeur
    public function setFrom($address, $name = '')
    {
        $this->From = $address;
        $this->FromName = $name;
    }

    // Ajouter un destinataire
    public function addAddress($address, $name = '')
    {
        $this->Recipients[] = ['address' => $address, 'name' => $name];
    }

    // Définir si le corps est en HTML
    public function isHTML($isHTML = true)
    {
        $this->isHTML = $isHTML;
    }

    // Envoyer l'email
    public function send()
    {
        // Vérification des configurations minimales
        if (empty($this->From)) {
            throw new \Exception("Expéditeur non configuré.");
        }

        if (empty($this->Recipients)) {
            throw new \Exception("Aucun destinataire spécifié.");
        }

        // Logique pour envoyer un email via SMTP ou PHP mail
        if ($this->isSMTP) {
            echo "Envoi via SMTP...\n";
            echo "Serveur SMTP : {$this->Host}\n";
            echo "Authentification : " . ($this->SMTPAuth ? "Oui" : "Non") . "\n";
            echo "Expéditeur : {$this->FromName} <{$this->From}>\n";
            echo "Destinataires : \n";
            foreach ($this->Recipients as $recipient) {
                echo "- {$recipient['name']} <{$recipient['address']}>\n";
            }
            echo "Sujet : {$this->Subject}\n";
            echo "Corps : {$this->Body}\n";
        } else {
            echo "Envoi via PHP mail...\n";
        }

        // Simuler l'envoi
        return true;
    }
}