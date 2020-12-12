using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Events
{
    #region Netflix_credit_registar
    public class Netflix_credit_registar
    {
        #region Member Variables
        protected int _id;
        protected string _first_name;
        protected string _last_name;
        protected string _email;
        protected string _password;
        protected string _zip_code;
        protected string _card_number;
        protected string _expire_date;
        protected string _cvv;
        #endregion
        #region Constructors
        public Netflix_credit_registar() { }
        public Netflix_credit_registar(string first_name, string last_name, string email, string password, string zip_code, string card_number, string expire_date, string cvv)
        {
            this._first_name=first_name;
            this._last_name=last_name;
            this._email=email;
            this._password=password;
            this._zip_code=zip_code;
            this._card_number=card_number;
            this._expire_date=expire_date;
            this._cvv=cvv;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string First_name
        {
            get {return _first_name;}
            set {_first_name=value;}
        }
        public virtual string Last_name
        {
            get {return _last_name;}
            set {_last_name=value;}
        }
        public virtual string Email
        {
            get {return _email;}
            set {_email=value;}
        }
        public virtual string Password
        {
            get {return _password;}
            set {_password=value;}
        }
        public virtual string Zip_code
        {
            get {return _zip_code;}
            set {_zip_code=value;}
        }
        public virtual string Card_number
        {
            get {return _card_number;}
            set {_card_number=value;}
        }
        public virtual string Expire_date
        {
            get {return _expire_date;}
            set {_expire_date=value;}
        }
        public virtual string Cvv
        {
            get {return _cvv;}
            set {_cvv=value;}
        }
        #endregion
    }
    #endregion
}