// SPDX-License-Identifier: GPL-3.0
//Demo run on Electronic Health Records
/*
 * Author: Debanga Bhuyan
*/

pragma solidity >=0.7.0 <0.9.0;

contract Healthcare{
    address private admin;
    
    struct Record{
        uint256 docID;
        string _pname;
        string _hname;
        string date;
        address pAddress;
        bool isFull;
        mapping(address => uint256) documents; 
    }
    
    struct Details{
        uint256 docID;
        string _pname;
        string _hname;
        string date;
    }
    
    modifier signAuth {
        require(msg.sender==admin, "Sender isn't admin");
        _;
    }
    
    constructor(){
        admin = 0xF5b8856F7d21f7Ce321da3928C38230E1E6c0E26;
    }
    
    mapping(uint256=>Record) public records;
    mapping(uint=>Details) public details;
    uint256[] public detailsIndex;
    uint256[] public recordIndex;
    
    
    function AddRecord(uint256 _id,string memory patientName,string memory hospital,string memory _date) public{
        Record storage newRecord = records[_id];
        Details storage newDetail = details[_id];
        
        require(!newRecord.isFull, "This id is already occupied");
            newRecord.pAddress = msg.sender;
            newRecord.docID = _id;
            newRecord._pname = patientName;
            newRecord._hname = hospital;
            newRecord.date = _date;
            newDetail.docID = _id;
            newDetail._pname = patientName;
            newDetail._hname = hospital;
            newDetail.date = _date;
        
        recordIndex.push(_id);
        detailsIndex.push(_id);
    }
    
    function ViewRecords(uint256 _id,string memory patientName) public returns(Details memory){
        Details storage newDetail = details[_id];
        return Details({docID:newDetail.docID, _pname:newDetail._pname ,_hname:newDetail._hname ,date:newDetail.date});
    }
    
    
}



